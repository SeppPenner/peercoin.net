<?php
$lang['ru'] = array();
$lang['ru'] += array(
	//Developers
	'developers.rapid_pace' => 'Развитие peercoin продвигается быстрыми темпами.',
	'developers.core_protocol' => 'Основной протокол',
	'developers.core_protocol_desc' => 'Следующее издание основного протокола кошелька, версии 0.5, будет содержать следующие функции:',
	'developers.cold_wallet_minting' => 'Создание монет с оффлайновым кошельком',
	'developers.cold_wallet_minting_desc' => 'В настоящее время, чтобы создавать новые монеты, кошелек пользователя всегда должен быть подключен к интернету, что называется  <strong>онлайн кошелек</strong>. Онлайн кошельки имеют больший риск того, что монеты будут украдены с помощью вредоносных программ, так как кошелек должен быть постоянно подключен к интернету в течение процесса создания монет. В следующей версии Peercoin специальные <strong>ключи для создания монет</strong> позволят пользователям создавать монеты, сохраняя свои расходные ключи полностью оффлайн. ',
	'developers.optional_checkpointing' => 'Создание контрольных точек на свое усмотрение',
	'developers.optional_checkpointing_desc' => 'В настоящее время сеть использует централизованную систему контрольных точек, чтобы защититься от атак. Необходимость в этом уменьшается, так как сеть постоянно растет, поэтому следующая версия позволит делать контрольные точки по собственному усмотрению. Будущая версия отключит контрольные точки по умолчанию. ',
	'developers.peercoin_ecosystem' => 'Экосистема Peercoin ',
	'developers.peer4commit' => 'Хотели бы вы участвовать в развитии Peercoin <strong>и</strong> зарабатывать? Вот ваш шанс! <a href="http://peer4commit.com/">Peer4commit</a> место для разработки. Вы можете:',
	'developers.peer4commit.1' => 'Выберете проект на сайте, работайте над ним и получайте peercoin в качестве награды. ',
	'developers.peer4commit.2' => 'Возьмитесь за проект, который Вы хотели бы поддержать и вкладывайте в него peercoin. ',
	'developers.peer4commit.3' => 'Придумайте новый проект, предложите его и получите денежную поддержку на его развитие.',
	'developers.what_are_you_waiting_for' => 'Ну и чего ты ждешь?',
	'developers.get_started' => 'Начни с Peer4Commit',
	'developers.notable_community_projects' => 'Текущие проекты сообщества',
	'developers.peerunity_desc' => '<b>Peerunity</b> - это программа-кошелек, которая разработана и поддерживается сообществом Peercoin. Она включает в себя множество дополнительных функций, которыми не обладают официальные кошельки, такие как контроль монет и их создание в один клик. Будущие версии программы будут содержать переработанную тему, интеграцию Peershares и вкладку для создания монет. ',
	'developers.peershares_desc' => '<b>Peershares</b> - это недорогая и децентрализованная бухгалтерская книга, которая будет использоваться в бизнесе для привлечения средств, отслеживания прав собственности на акции и распределении дивидендов в автоматическом режиме. Любой бизнес, использующий Peershares, будет иметь свою собственную, независимую от других цепочку блоков, которую можно дешево и легко защитить с помощью системы Peercoin доказательства правильности доли. ',
	'developers.peerbox_desc' => '<b>Peerbox</b> - это защищенная операционная система для создания монет и работы узлов Peercoin, которая сейчас находится на стадии активной разработки. Она фокусируется на недорогих, энергетически-эффективных устройствах, таких как Raspberry Pi, который совместим с целью Peercoin - обеспечивать энергетически-эффективную криптовалюту. Если ASIC - термин, описывающий самое специализированное и энергетически-эффективное создание монет, то Peerbox - это ASIC для системы доказательства правильности доли. ',
	'developers.nubits_desc' => '<b>NuBits</b> - это проект, который будет скоро представлен создателем Peershares Джорданом Ли. NuBits будет первой реализацией Peershares. Проект предназначен для решения проблем волатильности криптовалют. ',
);
$lang['ru'] += array(
	//Exchanges
	'exchanges.what_are' => 'Что такое биржа?',
	'exchanges.what_are_desc' => '<b>Биржи</b> позволяют вам торговать официальными валютами, такими как Доллар и Евро, для того, чтобы купить или продать Peercoins. Биржи так же содействуют торговле между peercoins и другими криптовалютами, таких, как Bitcoin.',
	'exchanges.buy_sell' => 'Выставление ордера',
	'exchanges.buy_sell_desc' => 'Торги начинаются с выставления ордера на покупку или продажу. Создайте <b>Ордер на покупку</b> чтобы запросить определенное количество Peercoin по конкретной цене. Создайте <b>Ордер на продажу</b> чтобы предложить продать Peercoin. Когда разные ордеры сходятся в цене, автоматически завершается торг, и на аккаунты обоих участников зачисляются валюты, которыми они торговали. <b>Рыночный ордер</b> будет сразу же торговаться по цене, которая доступна в данный момент. ',
	'exchanges.fees' => 'Комиссии',
	'exchanges.fees_desc' => 'Каждый раз, когда происходит торг, небольшой процент забирается биржей за проведение транзакции. Этот процесс известен, как <b>Торговые комиссии</b>. Некоторые биржи взимают <b>Комиссии за вывод средств</b>, когда Вы выводите свою новую валюту с биржи. ',
	'exchanges.choosing' => 'Выберете биржу',
	'exchanges.disclaimer' => 'Напоминание: удостоверьтесь, что Вы вывели Ваши Peercoin с биржи после покупки. Хранение монет в Вашем собственном кошельке гораздо более безопасно, а так же дает Вам право на 1&#37; вознаграждения за создание монет Peercoin.',
	'exchanges.location' => 'Месторасположение',
	'exchanges.notes' => 'Примечания',
	'exchanges.visit' => 'Посетить',
);

$lang['ru'] += array(
	'footer.links' => 'Ссылки',
	'footer.tools' => 'Инструменты',
	'footer.exchanges' => 'Биржи',
	'footer.mining' => 'Майнинг',
);
$lang['ru'] += array(
	// FAQ
	'faq.yes' => 'Да',
	'faq.no' => 'Нет',
	'faq.sources' => 'Источники',
	'faq.q1' => 'Был ли Peercoin запущен честно?',
	'faq.q1_ans' => 'Санни Кинг объявил о том, что планирует запустить Peercoin за 9 дней до запуска. Не было никаких блоков, добываемых до запуска. Один участник форума написал: "[Санни Кинг] опубликовал ссылку на источник в другом треде в обещанное время (5 минут до 18:00 UTC). Там не было никаких заранее созданных блоков. К тому времени, как я все сделал и запустил, там было создано 5 блоков."',
	'faq.q2' => 'Какова цель контрольных точек?',
	'faq.q2_ans' => 'Для версии 0.2 централизованная система контрольных точек уже не критически необходимая часть протокола. Цель - защитить сеть в начальный период роста и помочь обеспечить возможность беспрепятственного обновления и развития. Централизованная система контрольных точек постепенно ослабевает и будет полностью убрана, чтобы достичь подобного уровня свободы и децентрализации, что и у Bitcoin. Контрольные точки существую исключительно в качестве меры безопасности: если случится что-то страшное, у нас есть контрольные точки для восстановления. ',
	'faq.q3' => 'Peercoin - клон Bitcoin?',
	'faq.q3_ans' => 'Peercoin - одна из действительно уникальных валют. Хотя код основан на Bitcoin, Peercoin - это первая криптовалюта, которая представляет систему Proof of Stake для защиты сети. Proof of Work так же используется в Peercoin, чтобы содействовать справедливому распределению монет, но не является необходимым для защиты сети.',
	'faq.q4' => 'Не является ли Peeroin мыльным пузырем?',
	'faq.q4_ans' => 'Peercoin несет инновационные функции и возможности, активных разработчиков и значительное участие сообщества. К 1 августа 2014 год, Peercoin уже почти 2 года и валюта имеет рыночную капитализацию более 20 миллионов долларов США. ',
	'faq.q5' => 'Является ли награда в 1&#37; от создания монет справедливой для всех пользователей?',
	'faq.q5_ans' => 'Когда вся денежная масса растет за счет процесса создания монет, все держатели Peercoin, кто участвует в создании монет, сохраняют свою относительную долю в сети. Хотя держатели крупных долей создают большее количество Peercoin, они не могут, в процентном выражении, вырываться вперед других создателей монет. ',
	'faq.q6' => 'Подвержен ли Peercoin инфляции?',
	'faq.q6_ans' => 'Изменение денежной массы PPC определяется:',
	'faq.q6_l1' => 'Proof of Work майнинг (увеличивает запас)',
	'faq.q6_l2' => 'Количество операций (уменьшает запас на 0.01 PPC за операцию)',
	'faq.q6_l3' => 'Proof of Stake создание монет (увеличивает запас со скоростью до 1&#37; в год)',
	'faq.q6_ans2' => 'Благодаря расширению процесса создания монет, инфляция Peercoin постоянно оставалась ниже 5&#37; в первой половине 2014 года. При нынешних темпах развития, эта ставка будет снижаться и дальше, что делает Peercoin менее инфляционной и более устойчивой, чем большинство других криптовалют. ',
);
$lang['ru'] += array(
	// Global
	'homepage_title' => 'Peercoin - Безопасная и Устойчивая криптомонета.',

	'second_ago' => 'секунду назад',
	'seconds_ago' => 'несколько секунд назад',

	'website' => 'Сайт',
	'forum' => 'Форум',
);
$lang['ru'] += array(
	// Header
	'header.get_started' => 'Начать',
	'header.newcomers' => 'Новичкам',
	'header.investors' => 'Инвесторам',
	'header.merchants' => 'Торговцам',
	'header.miners' => 'Майнерам',
	'header.developers' => 'Разработчикам',
	'header.resources' => 'Ресурсы',
	'header.learn' => 'Узнать',
	'header.frequently_asked_questions' => 'Часто Задаваемые Вопросы',
	'header.peercoin_whitepaper' => 'Техническое описание',
	'header.exchanges' => 'Биржи',
	'header.mint_peercoins' => 'Создание монет Peercoin',

	'header.wallet' => 'Кошельки',

	'header.community' => 'Сообщество',

	'header.languages' => 'Языки',
);
$lang['ru'] += array(
	// Index page
	'index.why_peercoin' => 'Почему Peercoin',
	'index.download_wallet' => 'Скачать Кошелек',
	'index.price' => 'Цена',
	'index.market_cap' => 'Рыночная капитализация',
	'index.total_supply' => 'Общий объем предложения ',
	'index.last_updated' => 'Последние обновления:',
	'index.last_updated_never' => 'никогда',
	'index.why_peercoin_q' => 'Почему <strong>Peercoin</strong>?',
	'index.why_peercoin_desc' => 'Peercoin стремится быть самой безопасной криптовалютой с самой низкой ценой, вознаграждая всех пользователей за улучшение и укрепление сети. ',
	'index.built_to_last' => 'Создана, чтобы <b>остаться надолго</b>',
	'index.built_to_last_desc' => 'Первая в мире Proof-of-stake криптовалюта.',
	'index.fair_distribution' => '<b>Справедливое</b> распределение',
	'index.fair_distribution_desc' => 'Никакой инсайдерской предпродажи или мгновенного майнинга. ',
	'index.transparent_protocol' => '<b>Прозрачный</b> протокол',
	'index.transparent_protocol_desc' => 'Сеть имеет полностью открытый исходный код.',
	'index.energy_efficient' => 'Энергетически <b>эффективная</b> ',
	'index.energy_efficient_desc' => 'Создавайте монеты Peercoins на любых устройствах.',
	'index.learn_more' => 'Узнать больше',
	'index.get_started' => 'Начать',
	'index.newcomers' => 'Новичкам',
	'index.newcomers_desc' => 'Узнай как покупать, продавать, тратить и хранить Peercoin.',
	'index.investors' => 'Инвесторам',
	'index.investors_desc' => 'Создание монет дает гарантированную награду в 1&#37;.',
	'index.merchants' => 'Торговцам',
	'index.merchants_desc' => 'Пора сократить операционные издержки.',
	'index.miners' => 'Майнерам',
	'index.miners_desc' => 'Используйте Ваше оборудование для майнинга с пользой.',
	'index.developers' => 'Разработчикам',
	'index.developers_desc' => 'Взгляните на инновации.',
	'index.newsletter' => 'Рассылка новостей',
	'index.newsletter_placeholder' => 'Введите ваш почтовый адрес...',
	'index.newsletter_submit' => 'Присоединиться!',
);
$lang['ru'] += array(
	//Investors
	'investors.established_network' => 'Созданная сеть',
	'investors.established_network_desc' => 'Peercoin был запущен в 2012 году, что делает его одной из самых старых и надежных криптовалютных сетей. ',
	'investors.limited_supply' => 'Ограниченная поставка',
	'investors.limited_supply_desc' => 'Годовой уровень инфляции Peercoin в среднем ниже 5&#37; в течение 2014 года и он продолжает падать. Вы можете посмотреть <a href="http://peerchain.net/charts.html">peerchain.net</a> для того, чтобы увидеть подробные данные за прошлые периоды.',
	'investors.efficient_security' => 'Эффективные меры безопасности',
	'investors.efficient_security_desc' => 'Peercoin - первая Proof-of-stake криптовалюта, что означает, что она не требует больших вычислительных мощностей для защиты сети. Все детали можно узнать в <a href="whitepaper">Техническом описании Peercoin</a>.',
	'investors.guaranteed_returns' => 'Гарантированная прибыль',
	'investors.guaranteed_returns_desc' => 'После того, как Peercoin удерживаются в течение 30 дней, они начинают зарабатывать 1&#37; награды в год. <a href="minting">Нажмите здесь, чтобы узнать больше</a>.',

);
$lang['ru'] += array(
	//Merchants
	'merchants.instant' => 'Получай деньги мгновенно',
	'merchants.instant_desc' => 'Все операции обрабатываются практически мгновенно с помощью технологии цепочек блоков Peercoin. Исследователь блоков мгновенно проверяет входящий платеж. ',
	'merchants.no_chargebacks' => 'Никаких возвратных платежей',
	'merchants.no_chargebacks_desc' => 'Как только платеж подтвержден сетью, он защищается шифрование мирового класса, что делает невозможным для клиента отозвать платеж. ',
	'merchants.no_transaction_fees' => 'Уменьшайте операционные комиссии',
	'merchants.no_transaction_fees_desc' => 'Чтобы совершить платеж, каждый покупатель платит комиссию в размере 0.01 Peercoin. Как торговец, вы не платите абсолютно ничего. ',

);
$lang['ru'] += array(
	// Mining
	'mining.compatible_with_bitcoin' => 'Совместимость с Bitcoin',
	'mining.compatible_with_bitcoin_desc' => 'Peercoin использует тот же алгоритм майнинга, что и Bitcoin, известный, как SHA-256. Любое программное обеспечение, работающее с сетями Bitcoin, может так же быть использовано для майнинга Peercoin. ',
	'mining.fair_distribution' => 'Справедливое распределение',
	'mining.fair_distribution_desc' => 'Технология майнинга Proof of Work используется чтобы распределять новые монеты, тогда как защита системы поддерживается исключительно технологией Proof of Stake. Это значит, что уязвимости майнинга Bitcoin, такие как Selfish Mining, не воздействуют на безопасность Peercoin. ',
	'mining.sustainable_reward' => 'Устойчивая награда',
	'mining.sustainable_reward_desc' => 'Награда за майнинг блока постепенно снижается, когда вычислительная мощность сети растет. Со временем, влияние майнинга на рост денежной массы будет постоянно сокращаться. ',
);
$lang['ru'] += array(
	'mintguide.title' => 'Следуйте инструкциям в Вашем Peercoin клиенте, чтобы начать создавать монеты!',
	'mintguide.qt_step1' => 'Убедитесь, что Ваш кошелек зашифрован надежной кодовой фразой. Запишите её и храните в безопасности; если Вы забудете кодовую фразу, то Вы потеряете свои деньги. Опции по шифрованию кошелька можно найти во вкладке настроек в программе Peercoin-QT.',
	'mintguide.qt_step2' => 'Чтобы начать создавать монеты, пройдите во вкладку помощь -> окно отладки -> консоль и напишите: <br><kbd>walletpassphrase abc 999999 true</kbd><br>, где "abc" - Ваш пароль, а "999999" - время в секундах, которое вы хотите потратить на создание монет. Вы можете изменить количество времени когда угодно, но обычно проще выставить сразу большие значения. Если Ваш пароль содержит пробелы, то заключите его в кавычки. ',
	'mintguide.qt_step3' => 'Очистите Ваш пароль, нажав Ctrl-L.',
	'mintguide.qt_step4' => 'Вы можете проверить, как проходит процесс создания монет, взглянув на замок в нижнем правом углу клиента. Через несколько секунд он должен разблокироваться. Если Вы наведете на него курсор мыши, должно появиться сообщение "Кошелек зашифрован и в данный момент открыт только для создания блоков".',
	'mintguide.peerunity' => 'Peerunity - программа, разработанная сообществом Peercoin. Она имеет больше функций, чем стандартный клиент Peercoin версии 0.4, а так же более простые методы создания монет. Она доступна для Windows, Linux и OS X. Вы можете скачать её здесь и посмотреть тред запуска <a href="https://talk.peercoin.net/t/peerunity-v0-1-0-released-for-windows-linux-os-x/2455">здесь</a>.',
	'mintguide.peerunity_step1' => 'Убедитесь, что Ваш кошелек зашифрован надежной кодовой фразой. Запишите её и храните в безопасности; если Вы забудете кодовую фразу, то Вы потеряете свои деньги. Опции по шифрованию кошелька можно найти во вкладке настроек в программе Peerunity. ',
	'mintguide.peerunity_step2' => 'Чтобы начать создавать монеты, просто нажмите кнопку "Открыть кошелек только для создания монет", введите Ваш пароль и нажмите ОК. ',
	'mintguide.peerunity_step3' => 'Вы Вы можете проверить, как проходит процесс создания монет, взглянув на замок в нижнем правом углу клиента. Через несколько секунд он должен разблокироваться. Если Вы наведете на него курсор мыши, должно появиться сообщение "Кошелек зашифрован и в данный момент открыт только для создания блоков".',

);
$lang['ru'] += array(
	'mineguide.title' => 'Следуйте этим шагам, чтобы начать майнить Peercoin!',
	'mineguide.step1' => 'Установить программное обеспечение кошелька',
	'mineguide.step1_desc' => 'Если вы еще не сделали этого, скачайте <a href="wallet">Кошелек Peercoin</a>.',
	'mineguide.step2' => 'Выберите майнинг пул',
	'mineguide.step2_poollist' => 'Пулы, связанные с Peercoin:',
	'mineguide.step2_multipoollist' => 'Мультимонетные пулы: ',
	'mineguide.step3' => 'Подписаться на этот пул',
	'mineguide.step3_desc' => 'Следуйте инструкциям на сайте пула. ',
);
$lang['ru'] += array(
	// minting
	'minting.mint_anywhere' => 'Создавай монеты где угодно ',
	'minting.mint_anywhere_desc' => 'Большинство криптовалют требуют для майнинга специальное программное обеспечение, но Peercoin можно создавать на любом компьютере. Создание монет - энергоэффективный процесс, так как он основан на  количестве Peercoins, которое у Вас есть, а не на вычислительной мощности.',
	'minting.secure_the_network' => 'Защитите сеть',
	'minting.secure_the_network_desc' => 'Каждый раз, когда Вы создаете монеты, появляется блок и Ваши монеты помогают защитить сеть. Чтобы атаковать сеть Peercoin, злоумышленник должен контролировать большинство процессов создания монет, что может в конечном итоге нанести вред его собственным инвестициям. ',
	'minting.earn_reward' => 'Заработай награду',
	'minting.earn_reward_desc' => 'Создание монет приносит Вам 1&#37; в год. Монеты могут быть созданы через 30 дней, после того, как они были переданы, а после 90 дней, шансы на успех будут максимальными. Если Вы создаете монеты чаще, то Ваша прибыль увеличивается! ',

);
$lang['ru'] += array(
	//Newcomers
	'newcomers.getting_started' => 'Начало работы с Peercoin',
	'newcomers.downlaod_wallet' => 'Выберите свой кошелек',
	'newcomers.download_wallet_desc' => 'Пройдите на <a href="wallet">страницу загрузки</a>, где Вы можете найти программу для хранения и управления Вашими новыми монетами. ',
	'newcomers.buy_from_exchange' => 'Покупайте на бирже',
	'newcomers.buy_from_exchange_desc' => 'Отправьте Ваши деньги на <a href="exchanges">Биржу Peercoin</a>, где Вы сможете покупать у других торговцев на открытом рынке.',
	'newcomers.withdraw_coins' => 'Вывод Ваших монет',
	'newcomers.withdraw_coins_desc' => 'Вступите во владение Вашими Peercoin, отправив их на адрес, созданный кошельком. Это защитит Вас, если биржа закроется в момент, когда Ваши деньги будут в торгах. ',
	'newcomers.learn_more' => 'Узнайте Больше',
	'newcomers.learn_more_desc' => 'Теперь, когда Ваши монеты находятся в кошельке, время узнать, как увеличить инвестиционный капитал с <a href="minting">Созданием монет Peercoin</a>.',

);
$lang['ru'] += array(
	'pig.title' => 'Следуйте следующим шагам, что бы встроить Peercoins на свой сайт:',
	'pig.step1' => 'Используйте вкладку Bulk Wallet на <a href="http://wallet.peercointalk.org">wallet.peercointalk.org</a>, чтобы предварительно сгенерировать большое количество адресов Peercoin. Скопируйте и вставьте список сгенерированных значений, разделенных запятыми (CSV), в защищенный текстовый файл на Вашем компьютере. Создайте резервную копию файла в безопасном месте. ',
	'pig.step2' => 'Импортируйте публичные адреса Peercoin в таблицу базы данных на Вашем веб-сервере. Не импортируйте приватные ключи, а храните их в оффлайновом режиме или вне компьютера, чтобы защитить от хакеров. ',
	'pig.step3' => 'Обеспечьте возможность оплатить покупки на Вашем сайте с помощью Peercoin. При выборе этой опции, отобразите один из адресов из базы данных, как платежный адрес и сохраните его вместе с заказом. ',
	'pig.step4' => 'Используйте исследователь блоков для обнаружения входящих платежей. Один из вариантов такого сервиса Вы можете найти на <a href="http://ppc.blockr.io">ppc.blockr.io</a>.',
	'pig.step5' => 'Peercoin отправляются на импортированные адреса, защищенные приватными ключами. Чтобы потратить их, используйте исходный файл кошелька, созданный в шаге 1. ',
	'pig.step6' => 'Если у Вас возникнут какие-либо вопросы, не стесняйтесь оставлять их на <a href="https://talk.peercoin.net">форуме сообщества</a>.',
	
);
$lang['ru'] += array(
	'waldownload.download' => 'Скачать',
	'waldownload.source' => 'Исходный код',
	'waldownload.license' => 'Лицензия',
	'waldownload.other_platforms' => 'Другие платформы',
	'waldownload.signatures' => 'Подписи',
	'waldownload.qt_title' => 'Peercoin-QT',
	'waldownload.peerunity_title' => 'Peerunity ',	
);
$lang['ru'] += array(
	//Whitepaper
	'whitepaper.download_pdf' => 'Скачать PDF',
	'whitepaper.software' => 'Техническое описание доступно в формате (PDF). Пожалуйста, пользуйтесь предпочтительным для Вас программным обеспечением: <a href="http://pdfreaders.org/">программы для чтения</a>.',

);
$lang['ru'] += array(
	// Wallet
	'wallet.title' => 'Кошельки',
	'wallet.desc' => 'Кошелек Peercoin - приложение, используемое для хранения и проведения различных операций с другими пользователями. Peercoin имеет два кошелька для рабочего стола: Peerunity и Peercoin-QT. Мы рекомендуем Peerunity для большинства пользователей. Больше информации о том, как пользоваться программным обеспечением Вашего кошелька, Вы можете получить посетив  <a href="newcomers">Новичкам</a>.',
	'wallet.peerunity' => 'Peerunity (рекомендовано) ',
	'wallet.peerunity_desc' => 'Peerunity создана сообществом Peercoin. Она включает функции, недоступные основному протоколу, такие, как создание монет в один клик и контроль монет. Будущие версии будут содержать переработанную контрольную панель, интеграцию Peershares и специальную вкладку для создания монет. ',
	'wallet.peercoinqt' => 'Peercoin-QT<br>(основной протокол)',
	'wallet.peercoinqt_desc' => 'Peercoin-QT - это основной протокол Peercoin, построенный и поддерживающийся разработчиком Peercoin Санни Кингом. Он получает обновления высочайшего приоритета. ',
	'wallet.paper_wallet' => 'Бумажный кошелек',
	'wallet.paper_wallet_desc' => 'Бумажный кошелек остается полностью оффлайн, напечатанным на листе бумаги для безопасного хранения. Используйте бумажный кошелек, если Вы хотите ограничить доступ к Вашим монетам и планируете хранить их в течение длительного периода времени. ',
	'wallet.android_wallet' => 'Android Кошелек',
	'wallet.android_wallet_desc' => 'Мобильный кошелек Peercoin, который позволяет Вам управлять Вашими монетами без переноски полноразмерных цепочек блоков на Вашем мобильном телефоне. Это экономит драгоценное пространство на вашем андроид-устройстве и позволяет Вам брать монеты с собой, где бы Вы ни были. ',
	'wallet.bkchain_wallet' => 'Bkchain Wallet',
	'wallet.bkchain_wallet_desc' => 'Bkchain is an online, client-side wallet. It allows you to access your peercoins with a web browser using an electrum-like 12 word seed.',
	'wallet.download' => 'Скачать',
	'wallet.visit_site' => 'Visit',
);
