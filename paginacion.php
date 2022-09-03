<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">

        <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
            <a class="page-link" href="youtube.php?pagina=<?php echo $_GET['pagina'] - 1; ?>" tabindex="-1" aria-disabled="true">Previous</a>
        </li>

        <?php for ($i = 0; $i < $paginas; $i++) : ?>

            <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>">
                <a class="page-link" href="youtube.php?pagina=<?php echo $i + 1; ?>"><?php echo $i + 1; ?>
                </a>
            </li>

        <?php endfor ?>

        <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>">
            <a class="page-link" href="youtube.php?pagina=<?php echo $_GET['pagina'] + 1; ?>">Next</a>
        </li>

    </ul>
</nav>