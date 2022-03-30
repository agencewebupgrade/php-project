<!-- Footer -->
<footer>

    <!-- Footer Links -->
    <div>

        <!-- Grid row -->
        <div>

            <!-- Grid column -->
            <div>

                <!-- Content -->
                <h5>Notre site</h5>
                <p>Here you can use rows and columns to organize your footer content.</p>

            </div>
            <!-- Grid column -->

            <hr>

            <!-- Grid column -->
            <div>

                <!-- Links -->
                <h5>Contact</h5>

                <ul>
                    <li>
                        <a href="#!">agence-Upgrade</a>
                    </li>
                    <li>
                        <a href="#!">20 allée Henry Purcell 42000 Saint-Etienne</a>
                    </li>
                    <li>
                        <a href="#!">07 54 37 73 65</a>
                    </li>
                    <li>
                        <a href="#!">contact@agence-upgrade.fr</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div>

                <!-- Links -->
                <h5>Navigation</h5>

                <ul>
                    <ul>
                        <?php 
    foreach($scanned_directory as $tool){
        echo '<li >'.'<a href= tools/'.$tool.'>'.$tool.'</a>'.'</li>';
    }
    ?>
                        <li><a
                                href="tools/convertisseur-min-MAJ/convertisseur-min-MAJ.php">convertisseur-min-maj.php</a>
                        </li>
                    </ul>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div>© 2022 Copyright:
        <a href="/"> https://agence-upgrade.fr/</a>
    </div>
    <!-- Copyright -->

</footer>