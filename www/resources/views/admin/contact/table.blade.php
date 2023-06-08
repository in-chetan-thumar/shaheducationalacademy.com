<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Subject</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th width="25%">Message</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tableData as $key => $row)
            <tr>
                <td>{{ $row->subject }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->mobile }}</td>
                <td>{{ $row->message }}</td>
                <td>{{ $row->created_at_formatted }}</td>
                <td>

                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Action <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu">
                            {{-- <a class="dropdown-item" onclick="showEditModel(event)"
                                href="{{ route('contacts.edit', $row->id) }}">Edit</a> --}}

                            {{-- @if ($row->is_active == 'Y')
                        <a class="dropdown-item" href="{{ route('contacts.status',$row->id) }}">Inactive</a>
                    @else
                        <a class="dropdown-item" href="{{ route('contacts.status',$row->id) }}">Active</a>
                    @endif --}}
                            <a class="dropdown-item"
                                onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-{{ $row->id }}').submit()">
                                Delete</a>
                            <form id="delete-{{ $row->id }}" action="{{ route('contacts.destroy', $row->id) }}"
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
