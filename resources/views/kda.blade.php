@extends('layouts.sidebar')

@section('content')

<h1 class="text-2xl font-semibold mb-4">Welcome to Home Page</h1>
<p class="text-blue">Certification ->> Challenge - Course - Internship</p> 
<p class="text-green"> Competition ->> International - National</p>
<br>

<div>
    <button id="openModalButton" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg">
        Create New kda
    </button>

    <!-- Background Overlay -->
    <div id="overlay" class="hidden fixed inset-0 bg-black opacity-50 z-40"></div>

    <!-- Modal -->
    <div id="modalContainer" class="hidden fixed inset-0 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 relative z-50">
            <h2 class="text-xl font-semibold mb-4">Create New kda</h2>
        <form action="{{ route('kda.store') }}" method="POST">
            @csrf
            
            <div class="relative z-0 w-full mb-6 group">
                <label for="level_select" class="sr-only">Underline select</label>
                <select id="level_select" name="level" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option selected>Choose a Level</option>
                    <option value="1">Competition</option>
                    <option value="2">Certification</option>
                </select>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label for="categorySelect" class="sr-only">Underline select</label>
                <select id="categorySelect" name="category"class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">

                </select>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="description" id="floating_first_description" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_first_description" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="link" id="floating_link" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_link" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">link</label>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg w-full mt-6">
                Create kda
            </button>
            <button id="closeModalButton" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded-lg w-full mt-3">
                Cancel
            </button>
        </form>
    </div>
</div>
</div>
<div>
<!--Container-->
<div class="container w-full  mt-10  mx-auto px-2">
    <!--Card-->
    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow-lg bg-slate-100 ">
        <h2 class="text-2xl font-semibold ">kda List</h2>
        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1">Id</th>
                    <th data-priority="2">category</th>
                    <th data-priority="3">level</th>
                    <th data-priority="4">description</th>
                    <th data-priority="5">link</th>
                    <th data-priority="6">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kda as $kd)
                <tr >
                    <td>{{ $kd->id }}</td>
                    <td>{{ $kd->category }}</td>
                    <td>{{ $kd->level}}</td>
                    <td>{{ $kd->description }}</td>
                    <td>{{ $kd->link }}</td>
                    <td>
                        {{-- edit button --}}
                        <button id="openModalButton_{{ $kd->id }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg">Edit</button>
                        {{-- delete button --}}
                        <form action="{{ route('kda.destroy', $kd->id) }}" method="post" style="display: inline-block;">
                            @method('delete')
                            @csrf
                            {{-- dengan onclick --}}
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-lg" onclick="return confirm('Are you sure you want to delete this kda?')">Delete</button>
                        </form>	
                        

                        <!-- Modal untuk popup -->
                        <div id="modalContainer_{{ $kd->id }}" class="hidden fixed inset-0 flex items-center justify-center z-50">
                            <div class="bg-white rounded-lg p-6 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 relative z-50">
                                <h2 class="text-xl font-semibold mb-4">Edit kda</h2>
                                <form action="{{ route('kda.update', $kd->id) }}" method="POST">
                                    <!-- Form fields here -->
                                    @method('put')
                                    @csrf
                                    <div class="relative z-0 w-full mb-6 group">
                                        {{-- category --}}
                                        <input type="text" name="category" id="floating_category" value="{{ $kd->category }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                        <label for="floating_category" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">category</label>
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        {{-- level --}}
                                        <input type="level" name="level" id="floating_level" value="{{ $kd->level }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                        <label for="floating_level" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">level</label>
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        {{-- description --}}
                                        <input type="text" name="description" id="floating_description" value="{{ $kd->description }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                        <label for="floating_description" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        {{-- link --}}
                                        <input type="text" name="link" id="floating_link" value="{{ $kd->link }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                        <label for="floating_link" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">link</label>
                                    </div>

                                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg w-full mt-6">Update kda</button>
                                </form>
                                <button id="closeModalButton_{{ $kd->id }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded-lg w-full mt-3">Cancel</button>
                            </div>
                        </div>
                        

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        
        

    </div>
    <!--/Card-->


</div>
<!--/container-->





<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {
        $('#level_select').change(function() {
            var selectedLevel = $(this).val();
            var categorySelect = $('#categorySelect');

            categorySelect.empty(); // Clear existing options

            if (selectedLevel === '1') { // Competition
                categorySelect.append('<option value="1">International</option>');
                categorySelect.append('<option value="2">National</option>');
            } else if (selectedLevel === '2') { // Certification
                categorySelect.append('<option value="3">Challenge</option>');
                categorySelect.append('<option value="4">Course</option>');
                categorySelect.append('<option value="5">Internship</option>');
            }

            // Optionally, you can add a default option
            categorySelect.prepend('<option value="" selected>Choose a category</option>');
        });
    });
</script>

<script>
    //jangan di rubah
    $(document).ready(function() {

        var table = $('#example').DataTable({
                responsive: true
            })
            .columns.adjust()
            .responsive.recalc();
    });
    //untuk modal
    $(document).ready(function() {
        // modal untuk edit
        @foreach ($kda as $kd)
            $("#openModalButton_{{ $kd->id }}").click(function() {
                $("#modalContainer_{{ $kd->id }}").removeClass("hidden");
                $("#overlay").removeClass("hidden");
            });
            $("#closeModalButton_{{ $kd->id }}").click(function() {
                $("#modalContainer_{{ $kd->id }}").addClass("hidden");
                $("#overlay").addClass("hidden");
            });
        @endforeach

});


</script>
</div>

<script src="{{ asset('js/modal.js') }}"></script>

@endsection