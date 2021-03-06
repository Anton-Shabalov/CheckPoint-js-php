Разработать PHP-скрипт, определяющий попадание точки на координатной плоскости в заданную область, и создать HTML-страницу, которая формирует данные для отправки их на обработку этому скрипту.<br/>

Параметр R и координаты точки должны передаваться скрипту посредством HTTP-запроса. Скрипт должен выполнять валидацию данных и возвращать HTML-страницу с таблицей, содержащей полученные параметры и результат вычислений - факт попадания или непопадания точки в область. Предыдущие результаты должны сохраняться между запросами и отображаться в таблице.<br/>

Кроме того, ответ должен содержать данные о текущем времени и времени работы скрипта.<br/>

Разработанная HTML-страница должна удовлетворять следующим требованиям:<br/>
Для расположения текстовых и графических элементов необходимо использовать табличную верстку.<br/>
Данные формы должны передаваться на обработку посредством GET-запроса.<br/>
Таблицы стилей должны располагаться в отдельных файлах.<br/>
При работе с CSS должно быть продемонстрировано использование селекторов псевдоклассов, селекторов дочерних элементов, селекторов элементов, селекторов потомств а также такие свойства стилей CSS, как наследование и каскадирование.<br/>
HTML-страница должна иметь "шапку", содержащую ФИО студента, номер группы и новер варианта. При оформлении шапки необходимо явным образом задать шрифт (fantasy), его цвет и размер в каскадной таблице стилей.<br/>
Отступы элементов ввода должны задаваться в процентах.<br/>
Страница должна содержать сценарий на языке JavaScript, осуществляющий валидацию значений, вводимых пользователем в поля формы. Любые некорректные значения (например, буквы в координатах точки или отрицательный радиус) должны блокироваться.
