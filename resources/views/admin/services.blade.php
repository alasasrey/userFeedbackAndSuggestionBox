@extends('app')

@section('content')
    <h2>Service List</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->service }}</td>
                <td>
                    <a href="{{ route('admin.services.edit', $service->id) }}">Edit</a>

                    <form action="{{ route('admin.services.delete', $service->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this service?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
