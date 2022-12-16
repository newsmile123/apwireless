
dw_Tooltip.defaultProps = {
	activateOnClick: true,
    showCloseBox: true,
    wrapFn: dw_Tooltip.wrapToWidth,
    closeBoxImage: '../../orinoco/scripts/dw_tooltips/images/close.gif'
}
dw_Tooltip.content_vars = {
    ta: {
		caption: '<strong>Transient address</strong>',
        str: 'Адрес передатчика. Обычно это MAC-адрес точки доступа.',
        w: 180},
    tsc: {
		caption: '<strong>TKIP Sequence Counter 32</strong>',
        str: 'Данный счетчик используется для упорядочивания передаваемых MPDU. (32 наимение значащих бита вектора инициализации бит)',
        w: 200},
	tsc16: {
		caption: '<strong>TKIP Sequence Counter 16</strong>',
        str: 'Данный счетчик используется для упорядочивания передаваемых MPDU. (16 наиболее значащих бита вектора инициализации бит)',
        w: 200},
    tk: {
		caption: '<strong>Temporary key</strong>',
        str: 'Временный ключ. (128 бит)',
        w: 170}
		,
	ttak: {
		caption: '<strong>TKIP-mixed transmit address and key</strong>',
        str: 'Промежуточный ключ, производимый фазой 1. (80 бит)',
        w: 340}
	,
    seed: {
		caption: '<strong>WEP Seed</strong>',
        str: 'Данное значение является выходом фазы 2 и представляет собой вектор иницализации и ключ шифрования. Для каждого MPDU это значение разное. (128 бит)',
        w: 200	}
		,
	sa: {
		caption: '<strong>Source address</strong>',
        str: 'Адрес отправителя. В данном случае MAC-адрес точки доступа',
        w: 200	}
		,
	da: {
		caption: '<strong>Destination address</strong>',
        str: 'Адрес получателя - MAC-адрес клиента',
        w: 260	}
	,
    mic_key: {
		caption: '<strong>Michael key</strong>',
        str: 'Ключ, используемый алгоритмом Michael. (64 бита)',
        w: 330	}
		,
	michael: {
		caption: '<strong>Код целостности сообщения</strong>',
        str: 'Cредство обеспечения имитозащиты в протоколах аутентификации — специальный набор символов, который добавляется к сообщению и предназначен для обеспечения его целостности и аутентификации источника данных',
        w: 250}
	,
    rc4: {
		caption: '<strong>Алгоритм шифрования RC4</strong>',
        str: 'WEP Seed разбивается на два значения: IV (Вектор инициализации) и RC4 Key (Ключ шифрования)',
        w: 250	}
}
