<h2 class="bg-light">Create student</h2>
<input type="text" id='name' placeholder="Name"> <br> <br>
<input type="text" id='age' placeholder="Age"> <br> <br>
<button onclick="create()">save</button>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/createStudent.js') }}"></script>