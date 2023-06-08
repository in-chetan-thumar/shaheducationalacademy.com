<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Title</th>
            <th>Document</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tableData as $key => $row)
            <tr>
                <td>{{ $row->title }}</td>
                <td>{{ $row->document }}</td>
                <td>{{ $row->created_at_formatted }}</td>
                <td>

                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Action <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="showEditModel(event)"
                                href="{{ route('solutions.edit', $row->id) }}">Edit</a>

                            {{-- @if ($row->is_active == 'Y')
                        <a class="dropdown-item" href="{{ route('solutions.status',$row->id) }}">Inactive</a>
                    @else
                        <a class="dropdown-item" href="{{ route('solutions.status',$row->id) }}">Active</a>
                    @endif --}}
                            <a class="dropdown-item"
                                onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-{{ $row->id }}').submit()">
                                Delete</a>
                            <form id="delete-{{ $row->id }}" action="{{ route('solutions.destroy', $row->id) }}"
                                method="POST">
                                @method('DELETE')
                                @csrf
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $tableData->links() }}
