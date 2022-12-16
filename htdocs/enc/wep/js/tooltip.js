dw_Tooltip.defaultProps = {
    activateOnClick: true,
    showCloseBox: true,
    wrapFn: dw_Tooltip.wrapToWidth,
    closeBoxImage: '../../orinoco/scripts/dw_tooltips/images/close.gif'
}
dw_Tooltip.content_vars = {
    prng: {
		caption: '<strong>Генератор псеводслучайных чисел</strong>',
        str: '<p>Формирует ключевой поток, называемый гаммой для шифра RC4</p>',
        w: 250}
	,
    rc4: {
		caption: '<strong>Rivest Cipher</strong>',
        str: '<p>Потоковый шифр, разработанный в RSA Security. Производится сложение ключевого потока, и шифротекста по модулю 2</p>',
        w: 200	}
	,
    crc32: {
		caption: '<strong>Cyclic redundancy check</strong>',
        str: '<p>Циклический избыточный код — алгоритм нахождения контрольной суммы, предназначенный для проверки целостности данных.</p>',
        w: 250	}
	,
    L4: 'You can have a tooltip pop up when hovering over an image too!'
}
