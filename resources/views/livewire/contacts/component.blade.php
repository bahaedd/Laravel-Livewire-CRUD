<div>
    <div class="title">Laravel - Livewire CRUD</div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @if($updateMode)
        @include('livewire.contacts.update')
    @else
        @include('livewire.contacts.create')
    @endif


    <table class="min-w-full divide-y divide-gray-200">
        <tr>
            <td class="w-1/2 px-4 py-2">ID</td>
            <td class="w-1/2 px-4 py-2">NAME</td>
            <td class="w-1/2 px-4 py-2">PHONE</td>
            <td class="w-1/2 px-4 py-2">ACTION</td>
        </tr>

        @foreach($data as $row)
            <tr>
                <td class="border px-4 py-2">{{$row->id}}</td>
                <td class="border px-4 py-2">{{$row->name}}</td>
                <td class="border px-4 py-2">{{$row->phone}}</td>
                <td class="border px-4 py-2">
                    <button wire:click="edit({{$row->id}})" class="btn btn-xs btn-warning"><i class="icon-edit"></i></button>
                    <button wire:click="destroy({{$row->id}})" class="btn btn-xs btn-danger"><i class="icon-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </table>

</div>
