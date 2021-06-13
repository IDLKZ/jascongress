<div class="table-responsive-sm">
    <table class="table table-striped" id="settings-table">
        <thead>
            <tr>
                <th>Logo</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Time</th>
{{--        <th>Instagram</th>--}}
{{--        <th>Twitter</th>--}}
{{--        <th>Facebook</th>--}}
{{--        <th>Telegram</th>--}}
{{--        <th>Whatsapp</th>--}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($settings as $setting)
            <tr>
                <td><img src="{{ $setting->getImage() }}"></td>
            <td>{{ $setting->address }}</td>
            <td>{{ $setting->phone }}</td>
            <td>{{ $setting->email }}</td>
            <td>{{ $setting->time }}</td>
{{--            <td>{{ $setting->instagram }}</td>--}}
{{--            <td>{{ $setting->twitter }}</td>--}}
{{--            <td>{{ $setting->facebook }}</td>--}}
{{--            <td>{{ $setting->telegram }}</td>--}}
{{--            <td>{{ $setting->whatsapp }}</td>--}}
                <td>
                    {!! Form::open(['route' => ['settings.destroy', $setting->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
{{--                        <a href="{{ route('settings.show', [$setting->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>--}}
                        <a href="{{ route('settings.edit', [$setting->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
{{--                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
