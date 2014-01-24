<?php
    require __DIR__ . '/MinecraftQuery.class.php';

    $Query = new MinecraftQuery( );

    try
    {
        $Query->Connect( 'localhost', 25565 );

        print_r( $Query->GetInfo( ) );
        print_r( $Query->GetPlayers( ) );
    }
    catch( MinecraftQueryException $e )
    {
        echo $e->getMessage( );
    }
?>
