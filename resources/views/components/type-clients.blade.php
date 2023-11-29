<div class="type-cliets">
    <div class="type-cliets__container">
        <h2 class="type-cliets__title">@lang($typeClients['title'])</h2>
        <div class="type-cliets__body">
            @foreach ($typeClients['content'] as $client)
                <div class="type-cliets__client">
                    <div class="type-cliets__client-img"><img src="{{ asset($client['img']) }}" alt=""></div>
                    <h3 class="type-cliets__client-title">@lang($client['title'])</h3>
                    <p class="type-cliets__client-text">@lang($client['text'])</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
