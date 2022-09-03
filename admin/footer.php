<!--
    ========================
    FOOTER
    =======================
-->
<footer class="container-fluid text-center ">

    <div class="row p-4">
        <div class="col">

            © 2022 Copyright - Jesús Alan Hernández Rodarte

        </div>
    </div>

</footer>

<!--CDN jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--CDN DATATABLE-->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>

<!--BOOTSRAP 5-->
<script src="../js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tabla_peticiones').DataTable({
            language: {
                search: "Search:"
            }
        });
    });
</script>


</body>

</html>