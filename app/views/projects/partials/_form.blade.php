<ul>
    <li>
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name') }}
    </li>

    <li>
        {{ Form::label('slug', 'Slug:') }}
        {{ Form::text('slug') }}
    </li>

    <li>
        {{ Form::submit($submit_text) }}
    </li>
</ul>