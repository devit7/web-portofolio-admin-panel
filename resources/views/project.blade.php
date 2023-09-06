@extends('layouts.sidebar')

@section('content')


    <h1 class="text-2xl text-black font-semibold mb-4">Welcome to Home Page</h1>
    <p class="text-black">This is the welcome page located in the views -> welcome.blade.php folder.</p>
    <br>
    <div>
        <div>
            <button id="openModalButton" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg">
                Create New project
            </button>
            
            <!-- Background Overlay -->
            <div id="overlay" class="hidden fixed inset-0 bg-black opacity-50 z-40"></div>

            <!-- Modal Create New Project -->
            <div id="modalContainer" class="hidden fixed inset-0 flex items-center justify-center z-50">
                <div class="bg-white rounded-lg p-6 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 relative z-50">
                    <h2 class="text-xl font-semibold mb-4">Create New project</h2>
                    <form action="{{ route('project.store') }}" method="POST">
                        @csrf
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="title" id="floating_title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_title" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">title</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="description" id="floating_description" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_description" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">description</label>
                        </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="image" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Link Img</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="link_project" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Link Project</label>
                            </div>
                    
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg w-full mt-6">
                            Create project
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
            <h2 class="text-2xl font-semibold ">project List</h2>
			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">Id</th>
						<th data-priority="2">title</th>
						<th data-priority="3">image</th>
						<th data-priority="4">description</th>
                        <th data-priority="5">link project</th>
						<th data-priority="6">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($project as $pj)
					<tr>
						<td>{{ $pj->id }}</td>
						<td>{{ $pj->title }}</td>
						<td>{{ $pj->image }}</td>
						<td>{{ $pj->description }}</td>
                        <td>{{ $pj->link_project }}</td>
						<td>
                            {{-- edit button --}}
                            <button id="openModalButton_{{ $pj->id }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg">Edit</button>
                            {{-- delete button --}}
							<form action="{{ route('project.destroy', $pj->id) }}" method="post" style="display: inline-block;">
                                @method('delete')
                                @csrf
                                {{-- dengan onclick --}}
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-lg" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
                            </form>	
                            
                            <!-- Modal untuk popup -->
                            <div id="modalContainer_{{ $pj->id }}" class="hidden fixed inset-0 flex items-center justify-center z-50">
                                <div class="bg-white rounded-lg p-6 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 relative z-50">
                                    <h2 class="text-xl font-semibold mb-4">Edit project</h2>
                                    <form action="{{ route('project.update', $pj->id) }}" method="POST">
                                        <!-- Form fields here -->
                                        @method('put')
                                        @csrf
                                        <div class="relative z-0 w-full mb-6 group">
                                            {{-- title --}}
                                            <input type="text" name="title" id="floating_title" value="{{ $pj->title }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                            <label for="floating_title" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">title</label>
                                        </div>
                                        <div class="relative z-0 w-full mb-6 group">
                                            {{-- image --}}
                                            <input type="text" name="image" id="floating_first_name" value="{{ $pj->image }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                            <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Link</label>
                                        </div>
                                        <div class="relative z-0 w-full mb-6 group">
                                            {{-- description --}}
                                            <input type="description" name="description" id="floating_description" value="{{ $pj->description }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                            <label for="floating_description" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">description</label>
                                        </div>
                                        <div class="relative z-0 w-full mb-6 group">
                                            {{-- link --}}
                                            <input type="text" name="link_project" id="floating_first_name" value="{{ $pj->link_project }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                            <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Link Project</label>
                                        </div>


                                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg w-full mt-6">Update project</button>
                                    </form>
                                    <button id="closeModalButton_{{ $pj->id }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded-lg w-full mt-3">Cancel</button>
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
            @foreach ($project as $pj)
                $("#openModalButton_{{ $pj->id }}").click(function() {
                    $("#modalContainer_{{ $pj->id }}").removeClass("hidden");
                    $("#overlay").removeClass("hidden");
                });
                $("#closeModalButton_{{ $pj->id }}").click(function() {
                    $("#modalContainer_{{ $pj->id }}").addClass("hidden");
                    $("#overlay").addClass("hidden");
                });
            @endforeach

    });

    
	</script>
</div>

<script src="{{ asset('js/modal.js') }}"></script>


@endsection