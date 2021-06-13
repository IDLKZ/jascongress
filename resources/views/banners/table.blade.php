<div class="table-responsive-sm">
    <table class="table table-striped" id="banners-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Title Kz</th>
        <th>Content</th>
        <th>Content Kz</th>
        <th>Experience</th>
        <th>Experience Kz</th>
        <th>Experience Content</th>
        <th>Experience Content Kz</th>
        <th>Organization</th>
        <th>Organization Kz</th>
        <th>Organization Content</th>
        <th>Organization Content Kz</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($banners as $banner)
            <tr>
                <td>{{ $banner->title }}</td>
            <td>{{ $banner->title_kz }}</td>
            <td>{{ $banner->content }}</td>
            <td>{{ $banner->content_kz }}</td>
            <td>{{ $banner->experience }}</td>
            <td>{{ $banner->experience_kz }}</td>
            <td>{{ $banner->experience_content }}</td>
            <td>{{ $banner->experience_content_kz }}</td>
            <td>{{ $banner->organization }}</td>
            <td>{{ $banner->organization_kz }}</td>
            <td>{{ $banner->organization_content }}</td>
            <td>{{ $banner->organization_content_kz }}</td>
                <td>
                    {!! Form::open(['route' => ['banners.destroy', $banner->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('banners.show', [$banner->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('banners.edit', [$banner->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>