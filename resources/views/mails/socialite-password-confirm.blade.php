@component('mail::html.message')
    # Introduction

    The body of your message.
    <h3>Abd. Asis</h3>
    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto assumenda, autem delectus dolore eos est et eum fuga laborum laudantium mollitia nam obcaecati, placeat reiciendis sequi sit velit voluptate.</h3>

    @component('mail::html.button', ['url' => 'https://laracasts.com'])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
