<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
    <form data-v-53bbf3de="" data-v-e9256624="" class="virtual-cards">
        <section data-v-53bbf3de="" data-v-e9256624="" data-number="1." class="contacts recipient">
            <h3 data-v-53bbf3de="" data-v-e9256624="" class="heading">Данные получателя карты</h3>
            <span data-v-53bbf3de="" data-v-e9256624="" class="input input--chisato">
                <input data-v-53bbf3de="" data-v-e9256624="" id="recipient-name" type="text" class="field input__field input__field--chisato">
                <label data-v-53bbf3de="" data-v-e9256624="" for="recipient-name" class="input__label input__label--chisato">
                    <span data-v-53bbf3de="" data-v-e9256624="" data-content="Имя Фамилия" class="input__label-content input__label-content--chisato">Имя Фамилия</span>
                </label>
            </span>
            <br data-v-53bbf3de="" data-v-e9256624="">
            <span data-v-53bbf3de="" data-v-e9256624="" class="input input--chisato">
                <input data-v-53bbf3de="" id="recipient-phone" class="field input__field input__field--chisato" data-v-e9256624="">
                <label data-v-53bbf3de="" data-v-e9256624="" for="recipient-phone" class="input__label input__label--chisato">
                    <span data-v-53bbf3de="" data-v-e9256624="" data-content="Телефон" class="input__label-content input__label-content--chisato">+7 (___) ___ __ __</span>
                </label>
                <span data-v-53bbf3de="" data-v-e9256624="" class="code">+7</span>
            </span>
            <br data-v-53bbf3de="" data-v-e9256624="">
            <span data-v-53bbf3de="" data-v-e9256624="" class="input input_not-required input--chisato">
                <input data-v-53bbf3de="" data-v-e9256624="" id="recipient-email" type="email" class="field input__field input__field--chisato">
                <label data-v-53bbf3de="" data-v-e9256624="" for="recipient-email" class="input__label input__label--chisato">
                    <span data-v-53bbf3de="" data-v-e9256624="" data-content="E-mail" class="input__label-content input__label-content--chisato">E-mail</span>
                </label>
            </span>
        </section>
        <section data-v-53bbf3de="" data-v-e9256624="" class="dark amount">
            <h3 data-v-53bbf3de="" data-v-e9256624="" class="heading">Укажите номинал карты</h3>
            <span data-v-53bbf3de="" data-v-e9256624="" class="input card-amount">
                <input data-v-53bbf3de="" data-v-e9256624="" type="number" placeholder="1500–150000" min="1500" max="150000" class="field short" />
                <div data-v-53bbf3de="" data-v-e9256624="" class="notice with-icon">Вы можете ввести любую сумму<br data-v-53bbf3de="" data-v-e9256624="">от 1500 руб. до 150 000 руб.</div>
            </span>
        </section>
    </form>
    <section data-v-53bbf3de="" data-v-e9256624="" class="subtotal dark">
        <label data-v-53bbf3de="" data-v-e9256624="" class="checkbox">
            <input data-v-53bbf3de="" data-v-e9256624="" type="checkbox" required="required">
            Я даю согласие на обработку моих персональных данных
        </label>
        <table data-v-53bbf3de="" data-v-e9256624="">
            <tbody>
            <tr data-v-53bbf3de="" data-v-e9256624="" class="total">
                <td data-v-53bbf3de="" data-v-e9256624="">
                    ИТОГОВАЯ СУММА
                </td>
                <td data-v-53bbf3de="" data-v-e9256624="" class="cost">
                    0 руб
                </td>
            </tr>
            <tr data-v-53bbf3de="" data-v-e9256624="">
            </tr>
            </tbody>
        </table>
        <div data-v-53bbf3de="" data-v-e9256624="" class="buy-buttons">
            <button data-v-53bbf3de="" data-v-e9256624="" value="card" name="card" disabled="disabled" class="buy">Оплата картой </button>
        </div>
        <div data-v-53bbf3de="" data-v-e9256624="" class="notice">
            Нажимая кнопку «Перейти к оплате»,<br data-v-53bbf3de="" data-v-e9256624="">
            я соглашаюсь с <a data-v-53bbf3de="" data-v-e9256624="" href="/static/docs/rules.pdf" target="_blank" download="Золотое Яблоко правила пользования подарочными картами.pdf" class="more">Правилами</a>, <a data-v-53bbf3de="" data-v-e9256624="" href="/static/docs/offer.pdf" target="_blank" download="Оферта Золотое Яблоко Подарочные.pdf" class="more">Офертой</a> и <a data-v-53bbf3de="" data-v-e9256624="" href="/static/docs/policy.pdf" target="_blank" download="Политика обработки и хранения персональных данных.pdf" class="more">Политикой по персональным данным</a>
        </div>
    </section>

    <script>

    </script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>