dw_Tooltip.defaultProps = {
    activateOnClick: true,
    showCloseBox: true,
    wrapFn: dw_Tooltip.wrapToWidth,
    closeBoxImage: '../../orinoco/scripts/dw_tooltips/images/close.gif'
}
dw_Tooltip.content_vars = {
    pmk: {
		caption: '<strong>Парный мастер ключ</strong>',
        str: '<p>Генерируется из предустановленного ключа с помощью функции PBKDF2 (Password-basedKeyDerivationFunction 2)</p>',
        w: 270}
	,
    anonce1: {
		caption: '<strong>Authenticator nonce</strong>',
        str: '<p>Случайное число, необходимое для генерации парного переходного ключа. Вычисляется на стороне точки доступа</p>',
        w: 230	}
	,
    snonce: {
		caption: '<strong>Supplicant nonce</strong>',
        str: '<p>Случайное число, необходимое для генерации парного переходного ключа. Вычисляется на стороне клиента</p>',
        w: 250	}
		,
	mic: {
		caption: '<strong>Код целостности сообщения</strong>',
        str: '<p>Cредство обеспечения имитозащиты в протоколах аутентификации — специальный набор символов, который добавляется к сообщению и предназначен для обеспечения его целостности и аутентификации источника данных.</p>',
        w: 250}
	,
    anonce3: {
		caption: '<strong>Authenticator nonce</strong>',
        str: '<p>Случайное число, необходимое для генерации парного переходного ключа. Вычисляется на стороне точки доступа. В тертьем сообщении пересылается тот же, что и в первом</p>',
        w: 200	}
		,
	ptk: {
		caption: '<strong>Парный переходный ключ</strong>',
        str: '<p>Содержит в себе ключи, использующиеся для шифрования и проверки целостности.</p>',
        w: 250	}
}
