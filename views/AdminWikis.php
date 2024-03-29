

<div class="container-fluid">
    <div class="row" style="margin-bottom: 33rem;">
        <div class="col-sm-3 col-md-2 sidebar">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4">User Name</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">

                    <li>
                        <a href="/profile" class="nav-link link-body-emphasis ">
                            <i class="bi bi-speedometer2"></i>
                            Dashboard
                        </a>
                    </li>
                    <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'Admin'){?>

                    <li>
                        <a href="/AdminWikis" class="nav-link link-body-emphasis active text-white">
                            <i class="bi bi-book"></i>
                            Wikis
                        </a>
                    </li>


                        <?php }?>
                    <li>
                        <a href="/addTag" class="nav-link link-body-emphasis">
                            <i class="bi bi-tags"></i>
                            Tags
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-body-emphasis">
                            <i class="bi bi-bookmarks"></i>
                            Categories
                        </a>
                    </li>
                </ul>
                <hr>

            </div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
            <h1 class="page-header text-white">Dashboard</h1>


            <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'Admin'){?>

                <h2 class="sub-header">Wikis</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>PublishedDate</th>
                            <th>Archieve</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($wikis as $wiki): ?>
                            <tr>
                                <td><?= $wiki['wikisID']?></td>
                                <td><?= $wiki['Title']?></td>
                                <td><?= $wiki['PublishedDate']?></td>
                                <td>
                                    <form method="POST">
                                        <button class="btn btn-primary" type="submit" name="submit" value="<?= $wiki['wikisID']?>">Archive</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php }; ?>


            <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'Reader'){?>

                <h2 class="sub-header">Users</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>publish Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($wikis as $wiki): ?>

                            <tr>
                                <td><?= $wiki['wikisID']?></td>
                                <td><?= $wiki['Title']?></td>
                                <td><?= $wiki['PublishedDate']?></td>
                                <td><a href="/delete?id=<?=$wiki['wikisID']?>" class="btn btn-danger"><i class="bi bi-trash3"></i></a></td>
                                <td><a href="/updateWiki?id=<?=$wiki['wikisID']?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a></td>
                            </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            <?php }; ?>
        </div>
    </div>
</div>

