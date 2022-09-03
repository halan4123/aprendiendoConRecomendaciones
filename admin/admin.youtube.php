<?php
require '../app/youtubeController.php';

$youtubeController = new YoutubeController();

$canales = $youtubeController->get();
?>


<?php require 'header.php' ?>

<section class="conteiner-fluid section-background">

    <div class="row mx-auto categoria-fila text-center">

        <div class="col-12 pt-5 pb-5">
            <h1 class="text-light">Panel Youtube</h1>
        </div>

    </div>

    <div class="row container mx-auto pb-5">

        <!--======================
        BOTÓN DE AGREGAR
         ======================-->
        <div class="col-12">
            <button type="button" class="mb-3  btn btn-success" data-bs-toggle="modal" data-bs-target="#agregar">
                Agregar
            </button>
        </div>

        <!--======================
        MODAL DE AGREGAR
         ======================-->

        <div class="modal fade" id="agregar" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">

            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalTitle">Canales de youtube</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>

                    <div class="modal-body">

                        <form id="storeForm" action="" method="POST">

                            <h5 class="text-dark text-center">Agregar</h5>

                            <div class="mb-3">
                                <label class="form-label text-dark">Nombre Canal</label>
                                <input type="text" name="channel_name" placeholder="Nombre Canal" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-dark">Url Video</label>
                                <input type="text" name="url_video" placeholder="Url Video" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-dark">Url Canal</label>
                                <input type="text" name="url_channel" placeholder="Url Canal" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-dark">Texto</label>
                                <textarea name="text" class="form-control" rows="3" placeholder="Texto"></textarea>

                            </div>

                            <div class="mb-3">
                                <label class="form-label text-dark">Nivel</label>
                                <input type="text" name="level" placeholder="Nivel" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">Registrar</button>
                            <input type="hidden" name="action" value="store">
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>


                    </div>
                </div>

            </div>
        </div>

        <!--======================
        MODAL DE ACTUALIZAR
         ======================-->

        <div class="modal fade" id="actualizar" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle" data-bs-backdrop="static">

            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="modalTitle">Canales de youtube</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>

                    <div class="modal-body">

                        <form id="updateForm" action="" method="POST">

                            <h5 class="text-dark text-center">Actualizar</h5>

                            <div class="mb-3">
                                <label class="form-label text-dark">Nombre Canal</label>
                                <input required id="channel_name" type="text" name="channel_name" placeholder="Nombre Canal" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-dark">Url Video</label>
                                <input required id="url_video" type="text" name="url_video" placeholder="Url Video" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-dark">Url Canal</label>
                                <input required id="url_channel" type="text" name="url_channel" placeholder="Url Canal" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-dark">Texto</label>
                                <textarea required id="text" name="text" class="form-control" rows="3" placeholder="Texto"></textarea>

                            </div>

                            <div class="mb-3">
                                <label class="form-label text-dark">Nivel</label>
                                <input required id="level" type="text" name="level" placeholder="Nivel" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">Actualizar</button>

                            <input type="hidden" name="action" value="update">
                            <input type="hidden" name="id" id="id">
                        </form>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>


                    </div>
                </div>

            </div>
        </div>

        <!--======================
        ELIMINAR REGISTRO
         ======================-->
        <form id="destroyForm" action="" method="post">

            <input type="hidden" name="action" value="destroy">
            <input type="hidden" name="id" id="id_destroy">

        </form>

        <div class="col-12 bg-light rounded pt-3 pb-3">

            <table id="tabla_peticiones" class="display table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th >Canal</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($canales as $canal) :
                    ?>
                        <tr>
                            <td><?php echo $canal['id']; ?></td>
                            <td><?php echo $canal['channel_name']; ?></td>

                            <td>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#actualizar" onclick="edit( <?= $canal['id'] ?>,'<?= $canal['channel_name'] ?> ','<?= $canal['url_video'] ?> ','<?= $canal['url_channel'] ?> ','<?= $canal['text'] ?> ','<?= $canal['level'] ?>       ')">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg>

                                </button>
                                <button onclick="remove(<?= $canal['id'] ?>)" style="color: white; background: red;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>

    </div>

</section>

<script type="text/javascript">
    function edit(id, channel_name, url_video, url_channel, text, level) {


        document.getElementById('channel_name').value = channel_name;
        document.getElementById('url_video').value = url_video;
        document.getElementById('url_channel').value = url_channel;
        document.getElementById('text').value = text;
        document.getElementById('level').value = level;
        document.getElementById('id').value = id;
    }

    function remove(id) {

        let confirm = prompt("Si quiere eliminar el registro, escriba: " + id);
        if (confirm == id) {

            document.getElementById('id_destroy').value = id;
            document.getElementById('destroyForm').submit();


        }
    }
</script>


<?php require 'footer.php' ?>