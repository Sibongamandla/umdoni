<?php

global $context;

$data = $context->data;

?>

<div class="row">
    <h1>
        Publications
    </h1>
    <div class="col-12 col-md-12 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Newsletters</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-header">
            <p class="card-title fw-light">Newsletter List</p>
                <div class="float-start float-lg-end">
                    <a class="btn btn-sm" href="<?php echo buildurl("dashboard/publications/add")?>" role="button">
                        <i class="bi bi-plus"></i> Add
                    </a>
                    <button class="btn  btn-sm">
                        <i class="bi bi-download"></i> Save
                    </button>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>NO#</th>
                                    <th>TITLE</th>
                                    <th>SUMMARY</th>
                                    <th>PUBLISHER</th>
                                    <th>CREATED DATE</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php
                                foreach ($data as $key => $newsletter) {
                                    $key++;

                                    echo '
                                <tr>
                                    <td class="text-bold-500">'.$key.'</td>
                                    <td>'.$newsletter['title'].'</td>
                                    <td>'.$newsletter['subtitle'].'</td>
                                    <td>'.$newsletter['publisher'].'</td>
                                    <td>'.$newsletter['createdAt'].'</td>
                                    <td>
                                        <a class="btn  btn-sm" href="add?id='.$newsletter['id'].'">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a class="btn  btn-sm" href="delete?id='.$newsletter['id'].'">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>';
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>