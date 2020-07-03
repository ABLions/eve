<div class="table-responsive">
    <table class="table" id="myClients-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Phone</th>
        <th>Mail</th>
        <th>Comments</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($myClients as $myClients)
            <tr>
                <td>{{ $myClients->name }}</td>
            <td>{{ $myClients->phone }}</td>
            <td>{{ $myClients->mail }}</td>
            <td>{{ $myClients->comments }}</td>
                <td>
                    {!! Form::open(['route' => ['myClients.destroy', $myClients->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('myClients.show', [$myClients->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('myClients.edit', [$myClients->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
