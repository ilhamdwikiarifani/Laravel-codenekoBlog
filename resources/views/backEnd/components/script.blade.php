<script src={{ asset("js/main.js") }}></script>

<script src={{ asset("js/bootstrap.js") }}></script>

<script>
    $(document).ready(function() {
            $(".toast").toast('show');
        });
</script>


{{-- Datatables --}}
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>



<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script>