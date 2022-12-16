/* new file */

function HexEditor(el) {
        this.el = el;
        this.maxLines = 10;
}

/**
 * Returns displayed data in hex form
 */
HexEditor.prototype.getData = function () {
        return this.data;
};

HexEditor.prototype.setData = function (data) {

        this.initialize(data);
};

HexEditor.prototype.initialize = function (data) {

        this.data = data;
        this.lastMarkedPosition = null;
        this.lastDisplayedLine = -1;
        this.areKeysBinded = false;
        this.charactersPerLine = 16;

        var el = $(this.el);
        var editor = this;

        // Clear old content (the editor should be reusable)
        $('.hex-table-container, .hex-editor-commands', el).remove();

        // Create maternal table
        el.append('<table class="hex-table-container">' +
                '<tr><td class="linesNo-container"></td>' +
                '    <td class="hex-view-container"></td>' +
                '    <td class="r"  style="width: 5px;">&nbsp;</td>' +
                '    <td style="width: 5px;">&nbsp;</td>' +
                '    <td class="plaintext-view-container"></td></tr>' +
                '</table>');

        // Create list of lines
        editor.AppendNextLines(this.maxLines);
        editor.wireConnections();
        editor.showToolbar();
};

HexEditor.prototype.getLastLineNo = function () {
        return Math.ceil(this.data.length / (this.charactersPerLine * 2)) - 1;
};

HexEditor.prototype.bin2hex = function (s) {

        // http://kevin.vanzonneveld.net
        // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
        // +   bugfixed by: Onno Marsman
        // +   bugfixed by: Linuxworld
        // +   improved by: ntoniazzi (http://phpjs.org/functions/bin2hex:361#comment_177616)
        // *     example 1: bin2hex('Kev');
        // *     returns 1: '4b6576'
        // *     example 2: bin2hex(String.fromCharCode(0x00));
        // *     returns 2: '00'

        var i, l, o = "",
                n;

        s += "";

        for (i = 0, l = s.length; i < l; i++) {
                n = s.charCodeAt(i).toString(16);
                o += n.length < 2 ? "0" + n : n;
        }

        return o;
};

HexEditor.prototype.hex2bin = function (hex, dotWhenUnsafe) {
        // ASCII HEX: 37="7", 57="W", 71="q"
        var bytes = [];
        var str;
        dotWhenUnsafe = (typeof dotWhenUnsafe == "undefined") ? false : dotWhenUnsafe;

        for (var i = 0; i < hex.length - 1; i += 2) {

                var ch = parseInt(hex.substr(i, 2), 16);

                if (dotWhenUnsafe) {
                        var isUnSafe = (ch == 128 || ch == 129 || ch == 130 || ch == 131 || ch == 132 || ch == 134 || ch == 135 || ch == 137 || ch == 140 ||
                                ch == 142 || ch == 146 || ch == 148 ||
                                ch == 151 || ch == 138 || ch == 147 || ch == 153 || ch == 154 || ch == 155 || ch == 158 || ch == 159 ||
                                ch == 173 || (ch >= 0 && ch <= 31));

                        if (isUnSafe) {
                                bytes.push(".".charCodeAt(0)); // dot
                        } else {
                                bytes.push(ch);
                        }
                } else {
                        bytes.push(ch);
                }
        }

        str = String.fromCharCode.apply(String, bytes);
        return str;
};

HexEditor.prototype.strpad = function (inputString, chars, padString) {
        var result = padString + inputString;
        var remFromLeft = result.length - chars;
        return result.substr(remFromLeft);
};

HexEditor.prototype.appendDataLines = function (data, startLine, maxLines) {

        var editor = this,
                str = '',
                hexCharsPerLine = editor.charactersPerLine * 2,
                startPos = startLine * hexCharsPerLine,
                endPos = Math.min(data.length, maxLines * hexCharsPerLine),
                i,
                L,
                el = $(editor.el),
                cellNo,
                closedTr = true;

        for (i = startPos; i < startPos + endPos; i += 2) {

                cellNo = i % hexCharsPerLine;
                L = Math.ceil(i / hexCharsPerLine);

                if (cellNo === 0) {
                        str += '<tr data-l="' + L + '" class="l' + L + '">';
                        closedTr = false;
                }

                var C = (cellNo / 2).toString();
                str += '<td data-c="' + C + '" class="c' + C + '">' + data.charAt(i) + data.charAt(i + 1) + '</td>';

                if (cellNo == hexCharsPerLine - 2) {
                        str += '</tr>';
                        closedTr = true;
                }
        }

        if (closedTr === false && cellNo != editor.charactersPerLine) {
                //var minWidth = (editor.charactersPerLine - cellNo) * 14; // 16px in CSS; TODO rewrite as settings
                for (i = cellNo + 2; i < editor.charactersPerLine * 2; i += 2) {
                        str += '<td>&nbsp;</td>';
                }
                str += '</tr>';
        }


        if ($('.hex-view', el).size() === 0) {
                $('.hex-view-container', el).html('<table class="hex-view">' + str + '</table>');
        } else {
                $('.hex-view', el).append(str);
        }

        // Make a copy and run it through hex2bin function
        if ($('.plaintext-view', el).size() === 0) {
                $('.plaintext-view-container', el).html('<table class="plaintext-view">' + str + '</table>');
        } else {
                $('.plaintext-view', el).append(str);
        }

        $('.plaintext-view-container td', el).each(function () {
                if ($(this).parent().data('l') >= startLine) {
                        $(this).text(editor.hex2bin($(this).text(), true /* use dots for unsafe characters */ ));
                }
        });
};

HexEditor.prototype.setStatus = function (text) {
        if (text === '') {
                $('.hex-editor-status').fadeOut('slow', function () {
                        $(this).text('');
                });
        } else if ($('.hex-editor-status').text() === '') {
                $('.hex-editor-status').hide().text(text).fadeIn('slow');
        } else {
                $('.hex-editor-status').text(text);
        }
};

HexEditor.prototype.showToolbar = function () {

        var editor = this;
        this.showCommands();
        $(this.el).append('<div class="hex-editor-status"></div>');
        var helpText = $('#hex-editor-help-text', $(this.el)).html();

        if (helpText) {
                $('.hex-editor-commands').append(' [<a href="" class="hex-editor-help-a">?</a>]');
                $('.hex-editor-help-a', $(this.el)).on('click', function (ev) {

                        ev.preventDefault();
                        editor.deactivateEditor();
                        var msg = $.msg({
                                bgPath: '/js/vendor/jQuery.msg-plugin/',
                                content: '<div class="hex-editor-help-window">' +
                                        '<a class="close" id="jquery-msg-close" style="float:right;cursor: pointer;font-weight:bold;font-size:25px;">×</a>' + helpText + '</div>',
                                autoUnblock: false
                        });

                        $('#jquery-msg-close').click(function () {
                                var $overlay = $('#jquery-msg-overlay').fadeOut(function () {
                                        $overlay.remove();
                                });
                        });

                        return false;
                });
        }
};

HexEditor.prototype.showCommands = function () {

        var editor = this;

        if ($('.hex-editor-commands', $(this.el)).size() === 0) {

                var fixedAnchors = '<span class="hex-editor-command_download-file">' +
                        '[<a href="' + this.downloadLink + '">Download as a binary file</a>] ' +
                        '</span>';
                $(this.el).append('<div class="hex-editor-commands">' + fixedAnchors + '</div>');

                if (editor.lastDisplayedLine < editor.getLastLineNo()) {
                        var anchors = '[<a class="show-more" href="">Show more</a>] ' +
                                '[<a class="show-all" href="">Show all</a>]';

                        $('.hex-editor-commands', $(this.el)).append(anchors);

                        $('.show-more', $(this.el)).click(function () {
                                editor.AppendNextLines(10);
                                return false;
                        });

                        $('.show-all', $(this.el)).click(function () {
                                editor.AppendNextLines(editor.getLastLineNo() - editor.lastDisplayedLine);
                                return false;
                        });
                }

        } else {
                if (editor.lastDisplayedLine >= editor.getLastLineNo()) {
                        $('.hex-editor-commands .show-more, .hex-editor-commands .show-all', $(this.el)).remove();
                        $('.hex-editor-commands').html($('.hex-editor-commands').html().replace(/\[\]/g, ''));
                }
        }
};

HexEditor.prototype.appendLineNumbers = function (startNo, endNo) {

        var str = '';
        for (var i = startNo; i < endNo; i++) {
                var number = (this.charactersPerLine * i).toString(16);
                str += '<tr><td data-l="' + i + '" class="l' + i + '">' + this.strpad(number, 8, '00000000') + '</td></tr>';
        }

        if (startNo === 0) {
                str = '<table class="linesNo r">' + str + '</table>';
                $('.linesNo-container', $(this.el)).html(str);
        } else {
                $('.linesNo', $(this.el)).append(str);
        }
};

/**
 * High-level function
 */
HexEditor.prototype.AppendNextLines = function (n) {
        var editor = this;
        var minN = Math.min(editor.lastDisplayedLine + n, editor.getLastLineNo()) - editor.lastDisplayedLine;

        editor.appendLineNumbers(editor.lastDisplayedLine + 1, editor.lastDisplayedLine + minN + 1);
        editor.appendDataLines(editor.data, (editor.lastDisplayedLine + 1), minN);

        editor.lastDisplayedLine += minN;
        editor.showCommands();
};

/**
 * http://stackoverflow.com/a/987376/99256
 */
HexEditor.prototype.selectText = function (element) {
        var doc = document;

        if (doc.body.createTextRange) { // ms

                // IE does not support SHIFT + arrows

                /*  var range = doc.body.createTextRange();
                 range.moveToElementText(element);
                 range.select();*/

        } else if (window.getSelection) { // moz, opera, webkit
                var selection = window.getSelection();
                var range = doc.createRange();
                range.selectNodeContents(element);
                selection.removeAllRanges();
                selection.addRange(range);
        }
};


HexEditor.prototype.markCell = function (L, C) {

        var editor = this;
        if (this.lastMarkedPosition !== null) {
                $('#hex-editor tr.l' + this.lastMarkedPosition[0] + ' td.c' + this.lastMarkedPosition[1]).removeClass('selected');
                $('#hex-editor .linesNo-container td.l' + this.lastMarkedPosition[0]).removeClass('selected-row');
        }

        $('#hex-editor .linesNo-container .l' + L).addClass('selected-row');
        var identifier = 'tr.l' + L + ' td.c' + C;
        var cell = $('#hex-editor .hex-view-container ' + identifier + ', #hex-editor .plaintext-view-container ' + identifier);
        cell.addClass('selected');
        editor.selectText(cell[0]);

        this.lastMarkedPosition = [L, C];
};

HexEditor.prototype.moveCaret = function (key) {

        var editor = this;
        var newPos;

        if (this.lastMarkedPosition === null) {
                newPos = [0, 0];
        } else {
                newPos = this.lastMarkedPosition.slice(0);
        }


        if (key == 37) { // left
                newPos[1]--;
        } else if (key == 39) { // right
                newPos[1]++;
        } else if (key == 38) { // up
                newPos[0]--;
        } else if (key == 40) { // down
                newPos[0]++;
        } else {
                return;
        }

        // checks for X
        if (newPos[1] < 0) {
                if (newPos[0] > 0) {
                        newPos[0]--;
                        newPos[1] = this.charactersPerLine - 1;
                } else {
                        newPos[1] = 0;
                }
        }

        if (newPos[1] > this.charactersPerLine - 1) {
                if (newPos[0] < this.lastDisplayedLine) {
                        newPos[0]++;
                        newPos[1] = 0;
                } else {
                        newPos[1] = this.charactersPerLine - 1;
                }
        }

        // check for Y
        if (newPos[0] < 0) {
                newPos[0] = 0;
        }

        if (newPos[0] > editor.lastDisplayedLine) {
                newPos[0] = editor.lastDisplayedLine;
        }

        // check for Y
        var lastLineCharactersLen = (editor.data.length % (this.charactersPerLine * 2)) / 2;
        if (lastLineCharactersLen === 0) {
                lastLineCharactersLen = this.charactersPerLine - 1;
        } else {
                lastLineCharactersLen--;
        }

        if (newPos[0] == editor.getLastLineNo() && newPos[1] > lastLineCharactersLen) {
                newPos[1] = lastLineCharactersLen;
        }

        this.markCell(newPos[0] /* L */ , newPos[1] /* C */ );
};

HexEditor.prototype.activateEditor = function () {
        var editor = this;
        $('#hex-editor').addClass('highlighted');
        editor.setStatus('Active');
        editor.areKeysBinded = true;
};

HexEditor.prototype.deactivateEditor = function () {
        var editor = this;
        editor.areKeysBinded = false;
        $('#hex-editor').removeClass('highlighted');
        editor.setStatus('Inactive');
};

HexEditor.prototype.wireConnections = function () {

        var editor = this;
        $('#hex-editor .hex-view-container td, #hex-editor .plaintext-view-container td').on('click', function (ev) {

                var C = $(this).data('c');
                var L = $(this).parent().data('l');

                editor.markCell(L, C);
        });

        $('#hex-editor').bind('click.hexeditor', function (ev) {
                editor.areKeysBinded = true;
        });

        $(document).bind('click.hexeditor', function (e) {

                if ($(e.target).parents('#hex-editor').length === 0) {
                        editor.deactivateEditor();
                } else {
                        editor.activateEditor();
                }
        });

        $(document).bind('keydown.hexeditor', function (ev) {

                if (ev.keyCode == 27) {
                        editor.deactivateEditor();
                } else if (editor.areKeysBinded && !ev.shiftKey && !ev.ctrlKey && !ev.altKey) {
                        editor.moveCaret(ev.which);
                        ev.preventDefault();
                }
        });
};

/* new file */

$(document).ready(function () {

        /////
        (function () {
                var formSubmitHandled = false;
                var originalActionString = '';
                var formSubmitHandler = function () {

                        var val = ODT.$('#frmform-function').val();

                        var subdomainToGo = ODT.Tools.subdomainMapping[val];
                        if (ODT.Tools.functionDerivedFromSubdomain !== val || ODT.Tools.isDefaultSubdomain) {
                                ODT.$('#frm-tool-form').addClass('submitToOtherSubdomain');
                                ODT.$('#frm-tool-form').attr('action', 'http://' + subdomainToGo + '.' + ODT.Tools.domainName + originalActionString);
                        } else {
                                ODT.$('#frm-tool-form').removeClass('submitToOtherSubdomain');
                                ODT.$('#frm-tool-form').attr('action', originalActionString);
                        }
                };

                ODT.Tools.properties.registerCallback(function (addedProperties) {

                        if (formSubmitHandled === false && $.inArray('uploadProgress', addedProperties) > -1 && $.inArray('functionDerivedFromSubdomain', addedProperties) > -1 && $.inArray('domainName', addedProperties) > -1 && $.inArray('subdomainMapping', addedProperties) > -1) {

                                formSubmitHandled = true;
                                originalActionString = ODT.$('#frm-tool-form').attr('action');
                                ODT.$('#frmform-function').change(formSubmitHandler);
                                formSubmitHandler();

                                // url is encoders-decoders.odt.com
                                if (ODT.Tools.functionDerivedFromSubdomain === '') {
                                        var state = $.bbq.getState('function');
                                        if (state !== undefined) {
                                                ODT.$('#frmform-function').val(state).trigger("chosen:updated");
                                        }
                                }
                        }
                });
        })();
        /////

        $.mask.definitions['h'] = "[0123456789abcdefABCDEF]";
        setMaskedInputForIV();
        ODT.UI.Forms.Chosen.showOnlyPermittedValues($('form #frm-mode'));

        checkIV();

        var autodetect = {
                isOn: true,
                lastVal: 'plain',
                do_disable: function () {
                        autodetect.isOn = false;
                        ODT.$('#frm-autodetect-off').addClass('highlighted');
                        ODT.$('#frm-autodetect-on').removeClass('highlighted');
                },
                do_enable: function () {
                        autodetect.isOn = true;
                        ODT.$('#frm-autodetect-on').addClass('highlighted');
                        ODT.$('#frm-autodetect-off').removeClass('highlighted');
                        this.checkTextInput();
                },
                setStatusTooltip: function (contentText) {

                        var status = $('#frm-text_type-status');
                        status.qtip({
                                style: {
                                        classes: 'qtip-arial-font qtip-light qtip-rounded',
                                        tip: {
                                                corner: true
                                        }
                                },
                                position: {
                                        my: 'bottom left', // Position my top left...
                                        at: 'top right', // at the bottom right of...
                                        adjust: {
                                                x: 0
                                        }
                                },
                                content: {
                                        text: contentText
                                },
                                hide: {
                                        fixed: true,
                                        delay: 500
                                }
                        });
                },
                checkTextInput: function () {

                        if (autodetect.isOn) {
                                var val = $('#frm-text').val();
                                var match = /^[a-fA-F0-9 \t\r\n\-]+$/.exec(val);
                                var newVal = match ? 'hex' : 'plain';

                                if (newVal === 'hex') {
                                        $('#frm-text').val($('#frm-text').val().replace(/\t/g, " "));
                                }

                                if (newVal != autodetect.lastVal) {
                                        setTextType(newVal);
                                        autodetect.lastVal = newVal;

                                        var contentText = 'The content of Input text field was automatically detected to be <b>' +
                                                (newVal === 'hex' ? 'hexadecimal string' : 'plain text') +
                                                "</b>. You can disable the automatic detection by clicking on Autodetect option 'OFF'.";

                                        var text = $('#frm-text');
                                        text.qtip({
                                                style: {
                                                        classes: 'qtip-arial-font qtip-light qtip-rounded',
                                                        tip: {
                                                                corner: true
                                                        }
                                                },
                                                position: {
                                                        my: 'bottom left', // Position my top left...
                                                        at: 'top right', // at the bottom right of...
                                                        adjust: {
                                                                x: 0
                                                        }
                                                },
                                                content: {
                                                        text: contentText
                                                },
                                                hide: {
                                                        fixed: true
                                                        //inactive: 3000
                                                },
                                                events: {
                                                        hide: function (event, api) {
                                                                text.qtip('destroy');
                                                        }
                                                }
                                        });

                                        text.qtip('api').show();

                                        setTimeout(function () {
                                                text.qtip('destroy');
                                        }, 10000);

                                        autodetect.setStatusTooltip(contentText);
                                }
                        }
                }
        };

        document.getElementById('frm-text').keyupCallback = autodetect.checkTextInput;

        ODT.$("#frm-text").bind('paste', function () {
                setTimeout(function () {
                        autodetect.checkTextInput();
                }, 100);
        });

        autodetect.setStatusTooltip('Input text type is currently plain text.');


        ODT.$("#frm-text-radios input[name='text_type']:radio").change(function () {

                if ($(this).is(':checked')) {
                        autodetect.do_disable();
                        setTextType($(this).val());
                        autodetect.lastVal = $(this).val();

                        if ($(this).val() === 'plain') {
                                autodetect.setStatusTooltip("Input text type is currently plain text.");
                        } else {
                                autodetect.setStatusTooltip("Input text type is currently hexadecimal string.");
                        }
                }
        });

        ODT.$("#frm-key-radios input[name='key_type']:radio").change(function () {

                var type = $(this).val();
                $('#frm-key_type-status').text('(' + type + ')');
        });

        ODT.$("#frm-autodetect-on").click(function () {
                autodetect.do_enable();
        });

        ODT.$("#frm-autodetect-off").click(function () {
                autodetect.do_disable();
        });


        function setTextType(type) {

                ODT.$('#frm-text-radios input[value="' + type + '"]')[0].checked = true;
                ODT.$('#frm-text_type-status').text('(' + type + ')');
        }

        ODT.$('#frmform-function').change(function () {
                checkIV();
                ODT.UI.Forms.Chosen.showOnlyPermittedValues($('form #frm-mode'));
                setMaskedInputForIV();
        });

        ODT.$('#frm-mode').change(function () {
                checkIV();
        });

        function generateIV(key) {
                var iv = ODT.$('#frmform-iv');
                iv.unmask();
                var hash = sha1(key);

                while (hash.length >= 0) {
                        iv.val(hash);

                        if (!ODT.UI.Forms.Validation.isValueValid(iv)) {
                                hash = hash.slice(0, hash.length - 1);
                        } else {
                                break;
                        }
                }

                setMaskedInputForIV();
        }

        /*
         * Update IV when changing encryption/decryption KEY.
         */
        ODT.$('#frmform-key').bind('keydown keyup change', function () {

                if (ODT.$('#frmform-iv').closest('tr').css('display') !== 'none') {
                        generateIV($(this).val());
                }
        });

        function checkIV() {
                var f = $('#frmform-function');
                var iv = $('#frmform-iv');
                var mode = $('#frm-mode').val();
                var v = f.val();

                if (v === 'AES' || v === 'arcfour' || mode === 'ecb') {
                        iv.val("");
                        iv.closest('tr').css('display', 'none');
                } else {
                        if (iv.closest('tr').css('display') === 'none') {
                                generateIV($('#frmform-key').val());
                        }

                        iv.closest('tr').css('display', '');
                }
        }
});

function sha1(str) {
        // http://kevin.vanzonneveld.net
        // +   original by: Webtoolkit.info (http://www.webtoolkit.info/)
        // + namespaced by: Michael White (http://getsprink.com)
        // +      input by: Brett Zamir (http://brett-zamir.me)
        // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
        // -    depends on: utf8_encode
        // *     example 1: sha1('Kevin van Zonneveld');
        // *     returns 1: '54916d2e62f65b3afa6e192e6a601cdbe5cb5897'
        var rotate_left = function (n, s) {
                var t4 = (n << s) | (n >>> (32 - s));
                return t4;
        };

        var cvt_hex = function (val) {
                var str = "";
                var i;
                var v;

                for (i = 7; i >= 0; i--) {
                        v = (val >>> (i * 4)) & 0x0f;
                        str += v.toString(16);
                }
                return str;
        };

        var blockstart;
        var i, j;
        var W = new Array(80);
        var H0 = 0x67452301;
        var H1 = 0xEFCDAB89;
        var H2 = 0x98BADCFE;
        var H3 = 0x10325476;
        var H4 = 0xC3D2E1F0;
        var A, B, C, D, E;
        var temp;

        str = this.utf8_encode(str);
        var str_len = str.length;

        var word_array = [];
        for (i = 0; i < str_len - 3; i += 4) {
                j = str.charCodeAt(i) << 24 | str.charCodeAt(i + 1) << 16 | str.charCodeAt(i + 2) << 8 | str.charCodeAt(i + 3);
                word_array.push(j);
        }

        switch (str_len % 4) {
        case 0:
                i = 0x080000000;
                break;
        case 1:
                i = str.charCodeAt(str_len - 1) << 24 | 0x0800000;
                break;
        case 2:
                i = str.charCodeAt(str_len - 2) << 24 | str.charCodeAt(str_len - 1) << 16 | 0x08000;
                break;
        case 3:
                i = str.charCodeAt(str_len - 3) << 24 | str.charCodeAt(str_len - 2) << 16 | str.charCodeAt(str_len - 1) << 8 | 0x80;
                break;
        }

        word_array.push(i);

        while ((word_array.length % 16) !== 14) {
                word_array.push(0);
        }

        word_array.push(str_len >>> 29);
        word_array.push((str_len << 3) & 0x0ffffffff);

        for (blockstart = 0; blockstart < word_array.length; blockstart += 16) {
                for (i = 0; i < 16; i++) {
                        W[i] = word_array[blockstart + i];
                }
                for (i = 16; i <= 79; i++) {
                        W[i] = rotate_left(W[i - 3] ^ W[i - 8] ^ W[i - 14] ^ W[i - 16], 1);
                }


                A = H0;
                B = H1;
                C = H2;
                D = H3;
                E = H4;

                for (i = 0; i <= 19; i++) {
                        temp = (rotate_left(A, 5) + ((B & C) | (~B & D)) + E + W[i] + 0x5A827999) & 0x0ffffffff;
                        E = D;
                        D = C;
                        C = rotate_left(B, 30);
                        B = A;
                        A = temp;
                }

                for (i = 20; i <= 39; i++) {
                        temp = (rotate_left(A, 5) + (B ^ C ^ D) + E + W[i] + 0x6ED9EBA1) & 0x0ffffffff;
                        E = D;
                        D = C;
                        C = rotate_left(B, 30);
                        B = A;
                        A = temp;
                }

                for (i = 40; i <= 59; i++) {
                        temp = (rotate_left(A, 5) + ((B & C) | (B & D) | (C & D)) + E + W[i] + 0x8F1BBCDC) & 0x0ffffffff;
                        E = D;
                        D = C;
                        C = rotate_left(B, 30);
                        B = A;
                        A = temp;
                }

                for (i = 60; i <= 79; i++) {
                        temp = (rotate_left(A, 5) + (B ^ C ^ D) + E + W[i] + 0xCA62C1D6) & 0x0ffffffff;
                        E = D;
                        D = C;
                        C = rotate_left(B, 30);
                        B = A;
                        A = temp;
                }

                H0 = (H0 + A) & 0x0ffffffff;
                H1 = (H1 + B) & 0x0ffffffff;
                H2 = (H2 + C) & 0x0ffffffff;
                H3 = (H3 + D) & 0x0ffffffff;
                H4 = (H4 + E) & 0x0ffffffff;
        }

        temp = cvt_hex(H0) + cvt_hex(H1) + cvt_hex(H2) + cvt_hex(H3) + cvt_hex(H4);
        return temp.toLowerCase();
}

function utf8_encode(argString) {
        // http://kevin.vanzonneveld.net
        // +   original by: Webtoolkit.info (http://www.webtoolkit.info/)
        // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
        // +   improved by: sowberry
        // +    tweaked by: Jack
        // +   bugfixed by: Onno Marsman
        // +   improved by: Yves Sucaet
        // +   bugfixed by: Onno Marsman
        // +   bugfixed by: Ulrich
        // +   bugfixed by: Rafal Kukawski
        // +   improved by: kirilloid
        // *     example 1: utf8_encode('Kevin van Zonneveld');
        // *     returns 1: 'Kevin van Zonneveld'

        if (argString === null || typeof argString === "undefined") {
                return "";
        }

        var string = (argString + ''); // .replace(/\r\n/g, "\n").replace(/\r/g, "\n");
        var utftext = '',
                start, end, stringl = 0;

        start = end = 0;
        stringl = string.length;
        for (var n = 0; n < stringl; n++) {
                var c1 = string.charCodeAt(n);
                var enc = null;

                if (c1 < 128) {
                        end++;
                } else if (c1 > 127 && c1 < 2048) {
                        enc = String.fromCharCode((c1 >> 6) | 192, (c1 & 63) | 128);
                } else {
                        enc = String.fromCharCode((c1 >> 12) | 224, ((c1 >> 6) & 63) | 128, (c1 & 63) | 128);
                }
                if (enc !== null) {
                        if (end > start) {
                                utftext += string.slice(start, end);
                        }
                        utftext += enc;
                        start = end = n + 1;
                }
        }

        if (end > start) {
                utftext += string.slice(start, stringl);
        }

        return utftext;
}

/* new file */

/*
	Masked Input plugin for jQuery
	Copyright (c) 2007-@Year Josh Bush (digitalbush.com)
	Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
	Version: @version

        https://github.com/digitalBush/jquery.maskedinput/pull/76
*/
(function($) {
	var pasteEventName = ($.browser.msie ? 'paste' : 'input') + ".mask";
	var iPhone = (window.orientation != undefined);

	$.mask = {
		//Predefined character definitions
		definitions: {
			'9': "[0-9]",
			'a': "[A-Za-z]",
			'*': "[A-Za-z0-9]"
		},
		dataName:"rawMaskFn"
	};

	$.fn.extend({
		//Helper Function for Caret positioning
		caret: function(begin, end) {
			if (this.length == 0) return;
			if (typeof begin == 'number') {
				end = (typeof end == 'number') ? end : begin;
				return this.each(function() {
					if (this.setSelectionRange) {
						this.setSelectionRange(begin, end);
					} else if (this.createTextRange) {
						var range = this.createTextRange();
						range.collapse(true);
						range.moveEnd('character', end);
						range.moveStart('character', begin);
						range.select();
					}
				});
			} else {
				if (this[0].setSelectionRange) {
					begin = this[0].selectionStart;
					end = this[0].selectionEnd;
				} else if (document.selection && document.selection.createRange) {
					var range = document.selection.createRange();
					begin = 0 - range.duplicate().moveStart('character', -100000);
					end = begin + range.text.length;
				}
				return { begin: begin, end: end };
			}
		},
		unmask: function() { return this.trigger("unmask"); },
		mask: function(mask, settings) {
			if (!mask && this.length > 0) {
				var input = $(this[0]);
				return input.data($.mask.dataName)();
			}
			settings = $.extend({
				placeholder: "_",
				completed: null,
				autoclear: true
			}, settings);

			var defs = $.mask.definitions;
			var tests = [];
			var partialPosition = mask.length;
			var firstNonMaskPos = null;
			var len = mask.length;

			$.each(mask.split(""), function(i, c) {
				if (c == '?') {
					len--;
					partialPosition = i;
				} else if (defs[c]) {
					tests.push(new RegExp(defs[c]));
					if(firstNonMaskPos==null)
						firstNonMaskPos =  tests.length - 1;
				} else {
					tests.push(null);
				}
			});

			return this.trigger("unmask").each(function() {
				var input = $(this);
				var buffer = $.map(mask.split(""), function(c, i) { if (c != '?') return defs[c] ? settings.placeholder : c });
				var focusText = input.val();

				function seekNext(pos) {
					while (++pos <= len && !tests[pos]);
					return pos;
				};
				function seekPrev(pos) {
					while (--pos >= 0 && !tests[pos]);
					return pos;
				};

				function shiftL(begin,end) {
					if(begin<0)
					   return;
					for (var i = begin,j = seekNext(end); i < len; i++) {
						if (tests[i]) {
							if (j < len && tests[i].test(buffer[j])) {
								buffer[i] = buffer[j];
								buffer[j] = settings.placeholder;
							} else
								break;
							j = seekNext(j);
						}
					}
					writeBuffer();
					input.caret(Math.max(firstNonMaskPos, begin));
				};

				function shiftR(pos) {
					for (var i = pos, c = settings.placeholder; i < len; i++) {
						if (tests[i]) {
							var j = seekNext(i);
							var t = buffer[i];
							buffer[i] = c;
							if (j < len && tests[j].test(t))
								c = t;
							else
								break;
						}
					}
				};

				function keydownEvent(e) {
					var k=e.which;

					//backspace, delete, and escape get special treatment
					if(k == 8 || k == 46 || (iPhone && k == 127)){
						var pos = input.caret(),
							begin = pos.begin,
							end = pos.end;

						if(end-begin==0){
							begin=k!=46?seekPrev(begin):(end=seekNext(begin-1));
							end=k==46?seekNext(end):end;
						}
						clearBuffer(begin, end);
						shiftL(begin,end-1);

						return false;
					} else if (k == 27) {//escape
						input.val(focusText);
						input.caret(0, checkVal());
						return false;
					}
				};

				function keypressEvent(e) {
					var k = e.which,
						pos = input.caret();
					if (e.ctrlKey || e.altKey || e.metaKey || k<32) {//Ignore
						return true;
					} else if (k) {
						if(pos.end-pos.begin!=0){
							clearBuffer(pos.begin, pos.end);
							shiftL(pos.begin, pos.end-1);
						}

						var p = seekNext(pos.begin - 1);
						if (p < len) {
							var c = String.fromCharCode(k);
							if (tests[p].test(c)) {
								shiftR(p);
								buffer[p] = c;
								writeBuffer();
								var next = seekNext(p);
								input.caret(next);
								if (settings.completed && next >= len)
									settings.completed.call(input);
							}
						}
						return false;
					}
				};

				function clearBuffer(start, end) {
					for (var i = start; i < end && i < len; i++) {
						if (tests[i])
							buffer[i] = settings.placeholder;
					}
				};

				function writeBuffer() { return input.val(buffer.join('')).val(); };

				function checkVal(allow) {
					//try to place characters where they belong
					var test = input.val();
					var lastMatch = -1;
					for (var i = 0, pos = 0; i < len; i++) {
						if (tests[i]) {
							buffer[i] = settings.placeholder;
							while (pos++ < test.length) {
								var c = test.charAt(pos - 1);
								if (tests[i].test(c)) {
									buffer[i] = c;
									lastMatch = i;
									break;
								}
							}
							if (pos > test.length)
								break;
						} else if (buffer[i] == test.charAt(pos) && i!=partialPosition) {
							pos++;
							lastMatch = i;
						}
					}
					if (!allow && lastMatch + 1 < partialPosition) {
						input.val("");
						clearBuffer(0, len);
					} else if (allow || lastMatch + 1 >= partialPosition) {
						writeBuffer();
						if (!allow) input.val(input.val().substring(0, lastMatch + 1));
					}
					return (partialPosition ? i : firstNonMaskPos);
				};

				input.data($.mask.dataName,function(){
					return $.map(buffer, function(c, i) {
						return tests[i]&&c!=settings.placeholder ? c : null;
					}).join('');
				})

				if (!input.attr("readonly"))
					input
					.one("unmask", function() {
						input
							.unbind(".mask")
							.removeData($.mask.dataName);
					})
					.bind("focus.mask", function() {
						focusText = input.val();
						if (settings.autoclear) {
							var pos = checkVal();
						}
						writeBuffer();
						var moveCaret=function(){
							if (pos == mask.length)
								input.caret(0, pos);
							else
								input.caret(pos);
						};
						($.browser.msie ? moveCaret:function(){setTimeout(moveCaret,0)})();
					})
					.bind("blur.mask", function() {
						if (settings.autoclear) {
							checkVal();
							if (input.val() != focusText)
								input.change();
						}
					})
					.bind("keydown.mask", keydownEvent)
					.bind("keypress.mask", keypressEvent)
					.bind(pasteEventName, function() {
						setTimeout(function() { input.caret(checkVal(true)); }, 0);
					});

				checkVal(true); //Perform initial check for existing values
			});
		}
	});
})(jQuery);

/* new file */

/*
 * jQuery BBQ: Back Button & Query Library - v1.2.1 - 2/17/2010
 * http://benalman.com/projects/jquery-bbq-plugin/
 * 
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
(function($,p){var i,m=Array.prototype.slice,r=decodeURIComponent,a=$.param,c,l,v,b=$.bbq=$.bbq||{},q,u,j,e=$.event.special,d="hashchange",A="querystring",D="fragment",y="elemUrlAttr",g="location",k="href",t="src",x=/^.*\?|#.*$/g,w=/^.*\#/,h,C={};function E(F){return typeof F==="string"}function B(G){var F=m.call(arguments,1);return function(){return G.apply(this,F.concat(m.call(arguments)))}}function n(F){return F.replace(/^[^#]*#?(.*)$/,"$1")}function o(F){return F.replace(/(?:^[^?#]*\?([^#]*).*$)?.*/,"$1")}function f(H,M,F,I,G){var O,L,K,N,J;if(I!==i){K=F.match(H?/^([^#]*)\#?(.*)$/:/^([^#?]*)\??([^#]*)(#?.*)/);J=K[3]||"";if(G===2&&E(I)){L=I.replace(H?w:x,"")}else{N=l(K[2]);I=E(I)?l[H?D:A](I):I;L=G===2?I:G===1?$.extend({},I,N):$.extend({},N,I);L=a(L);if(H){L=L.replace(h,r)}}O=K[1]+(H?"#":L||!K[1]?"?":"")+L+J}else{O=M(F!==i?F:p[g][k])}return O}a[A]=B(f,0,o);a[D]=c=B(f,1,n);c.noEscape=function(G){G=G||"";var F=$.map(G.split(""),encodeURIComponent);h=new RegExp(F.join("|"),"g")};c.noEscape(",/");$.deparam=l=function(I,F){var H={},G={"true":!0,"false":!1,"null":null};$.each(I.replace(/\+/g," ").split("&"),function(L,Q){var K=Q.split("="),P=r(K[0]),J,O=H,M=0,R=P.split("]["),N=R.length-1;if(/\[/.test(R[0])&&/\]$/.test(R[N])){R[N]=R[N].replace(/\]$/,"");R=R.shift().split("[").concat(R);N=R.length-1}else{N=0}if(K.length===2){J=r(K[1]);if(F){J=J&&!isNaN(J)?+J:J==="undefined"?i:G[J]!==i?G[J]:J}if(N){for(;M<=N;M++){P=R[M]===""?O.length:R[M];O=O[P]=M<N?O[P]||(R[M+1]&&isNaN(R[M+1])?{}:[]):J}}else{if($.isArray(H[P])){H[P].push(J)}else{if(H[P]!==i){H[P]=[H[P],J]}else{H[P]=J}}}}else{if(P){H[P]=F?i:""}}});return H};function z(H,F,G){if(F===i||typeof F==="boolean"){G=F;F=a[H?D:A]()}else{F=E(F)?F.replace(H?w:x,""):F}return l(F,G)}l[A]=B(z,0);l[D]=v=B(z,1);$[y]||($[y]=function(F){return $.extend(C,F)})({a:k,base:k,iframe:t,img:t,input:t,form:"action",link:k,script:t});j=$[y];function s(I,G,H,F){if(!E(H)&&typeof H!=="object"){F=H;H=G;G=i}return this.each(function(){var L=$(this),J=G||j()[(this.nodeName||"").toLowerCase()]||"",K=J&&L.attr(J)||"";L.attr(J,a[I](K,H,F))})}$.fn[A]=B(s,A);$.fn[D]=B(s,D);b.pushState=q=function(I,F){if(E(I)&&/^#/.test(I)&&F===i){F=2}var H=I!==i,G=c(p[g][k],H?I:{},H?F:2);p[g][k]=G+(/#/.test(G)?"":"#")};b.getState=u=function(F,G){return F===i||typeof F==="boolean"?v(F):v(G)[F]};b.removeState=function(F){var G={};if(F!==i){G=u();$.each($.isArray(F)?F:arguments,function(I,H){delete G[H]})}q(G,2)};e[d]=$.extend(e[d],{add:function(F){var H;function G(J){var I=J[D]=c();J.getState=function(K,L){return K===i||typeof K==="boolean"?l(I,K):l(I,L)[K]};H.apply(this,arguments)}if($.isFunction(F)){H=F;return G}else{H=F.handler;F.handler=G}}})})(jQuery,this);
/*
 * jQuery hashchange event - v1.2 - 2/11/2010
 * http://benalman.com/projects/jquery-hashchange-plugin/
 * 
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
(function($,i,b){var j,k=$.event.special,c="location",d="hashchange",l="href",f=$.browser,g=document.documentMode,h=f.msie&&(g===b||g<8),e="on"+d in i&&!h;function a(m){m=m||i[c][l];return m.replace(/^[^#]*#?(.*)$/,"$1")}$[d+"Delay"]=100;k[d]=$.extend(k[d],{setup:function(){if(e){return false}$(j.start)},teardown:function(){if(e){return false}$(j.stop)}});j=(function(){var m={},r,n,o,q;function p(){o=q=function(s){return s};if(h){n=$('<iframe src="javascript:0"/>').hide().insertAfter("body")[0].contentWindow;q=function(){return a(n.document[c][l])};o=function(u,s){if(u!==s){var t=n.document;t.open().close();t[c].hash="#"+u}};o(a())}}m.start=function(){if(r){return}var t=a();o||p();(function s(){var v=a(),u=q(t);if(v!==t){o(t=v,u);$(i).trigger(d)}else{if(u!==t){i[c][l]=i[c][l].replace(/#.*/,"")+"#"+u}}r=setTimeout(s,$[d+"Delay"])})()};m.stop=function(){if(!n){r&&clearTimeout(r);r=0}};return m})()})(jQuery,this);

