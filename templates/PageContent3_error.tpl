<section>
    <h1>Not valid enter</h1>
    {foreach from=$error item=Data}
        <p class="alert alert-danger" role="alert">
            <strong>Error!</strong> {$Data}
        </p>
    {/foreach}
</section>