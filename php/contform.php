<div class="contacts">
    <h2>Нужна помощь?</h2>
<form action="/php/form.php" id="contact" method="POST">
    <div class="contact__info">
        <input class="txt1" type="text" name="name" required  minlength="2" maxlength="15" placeholder="Как вас зовут?">
        <input class="txt1" type="tel" name="number" required minlength="7" maxlength="13" placeholder="Введите свой телефон">
        <input class="txt1" type="email" name="email" required placeholder="name@gmail.com">
        <input class="txt1" type="text" name="message" placeholder="Введи ваше сообщение">
    </div>
</form>

<button form="contact">Отправить</button>
</diV>