<footer class="main-footer text-center">
    Copyright &copy; 2019 --- Haposoft's Training --- All rights reserved.
</footer>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/admin-staff.js')}}"></script>
<script src="{{asset('js/admin-add-user-project.js')}}"></script>
<script src="{{asset('js/admin-task.js')}}"></script>
<script src="{{asset('js/admin-assign-project.js')}}"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
