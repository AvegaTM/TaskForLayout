{if $person eq 0}
{else}
    <section>
        <h3>Вы отправляли данныеЖ</h3>
        <p>Имя: <b>{$person.name}</b></p>
        <p>Телефон: <b>{$person.phone}</b></p>
        <p>E-mail: <b>{$person.email}</b></p>
    </section>
{/if}
<section>
    <form name="f-main" action="index.php" method="POST" class="panel panel-primary">
        <h3 class="panel-heading">Представьтесь пожалуйста.</h3>
        <fieldset class="panel-body">
            <input name="test" type="hidden" value="test">
            <p class="form-group">
                <label for="name">Имя:</label>
                <input name="name" id="name" class="form-control tooltip-options" type="text" value="" required="required">
            </p>
            <p class="form-group">
                <label for="phone">Телефон:</label>
                <input name="phone" id="phone" class="form-control tooltip-options" type="tel" value="" required="required">
            </p>
            <p class="form-group">
                <label for="email">E-mail:</label>
                <input name="email" id="email" class="form-control tooltip-options" type="email" value="" required="required">
            </p>
            <p>
                <input class="btn" name="reset" type="reset" value="Reset">&nbsp;
                <input id="submit" class="btn btn-default" name="submit" type="submit" value="Submit">
            </p>
        </fieldset>
    </form>
</section>