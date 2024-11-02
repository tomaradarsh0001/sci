@extends('admin.index')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')

<style>
    .delbtn, .sucbtn{
        color: #ffffff !important;
    }
</style>

<div class="container">
<div class="row align-items-center">
    <div class="col-12 col-md-6 col-xl-8 mb-4 mb-xl-0">
        <h2>Doctors List</h2>
    </div>
    <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-end">
        @if (session('success'))
            <div class="alert alert-success mb-0 me-2">{{ session('success') }}</div>
        @endif
        @include('include.delete-confirmation')
        <a href="{{ route('doctors.create') }}" class="btn btn-primary">Add New Doctor</a>
    </div>
</div>

    <table class="table mt-3 table-hover table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Degree</th>
                <th>city</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->degree_section }}</td>
                    <td>{{ $doctor->city }}</td>
                    <td>
                        @if ($doctor->city === 'Delhi')
                            <a href="{{ route('doctors.show', $doctor) }}" class="btn btn-primary">View</a>
                        @elseif($doctor->city === 'Gurgaon')
                            <a href="{{ route('doctors.gurgaonshow', $doctor) }}" class="btn btn-primary">View</a>
                        @else
                            <a href="{{ route('doctors.show', $doctor) }}" class="btn btn-default">View</a>
                        @endif
                        <a href="{{ route('doctors.edit', $doctor) }}" class="btn btn-success sucbtn">Edit</a>
                        <form action="{{ route('doctors.destroy', $doctor) }}" method="POST" style="display:inline;"
                            id="deleteForm">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger delbtn" onclick="showDeleteModal()">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    function showDeleteModal() {
        var deleteModal = new bootstrap.Modal(document.getElementById('ModalDelete'));
        deleteModal.show();
    }

    function confirmDelete() {
        document.getElementById('deleteForm').submit();
    }
</script>
@endsection