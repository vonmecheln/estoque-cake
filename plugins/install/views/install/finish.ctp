<div class="install">
    <h2><?php echo $title_for_layout; ?></h2>

    <p>
        Admin panel: <?php echo $html->link(Router::url('/users/login', true), Router::url('/users/login', true)); ?><br />
        Username: admin<br />
        Password: password
    </p>

    <br />
    <br />

    <p>
        Delete the installation directory <strong>/app/plugins/install</strong>.
    </p>

    <br />
    <br />

    <?php
        echo $html->link(__('Click here to delete installation files', true), array(
            'plugin' => 'install',
            'controller' => 'install',
            'action' => 'finish',
            'delete' => 1,
        ));
    ?>
</div>