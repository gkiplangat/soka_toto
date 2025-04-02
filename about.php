<!--Include Header Section -->
<?php
include "includes/header.php"
?>
<!-- Page Header Start -->
<div class="container-fluid page-header mb-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-dark animated slideInDown mt-2">About Us</h1>

    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-xxl py-5" id="who_are_we">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px">
                    <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/about.JPG" alt=""
                        style="object-fit: cover" />
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                        Who Are We?
                    </div>
                    <h1 class="display-6 mb-5">
                        We are Christ-centered, non-profit making organization Empowering children and young mothers
                        through faith.
                    </h1>
                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <p class="text-dark mb-2">
                            "By touching a child's heart, we not only transform a community but also create a future
                            filled with hope, opportunity, and empowered generations who will make a lasting impact."
                        </p>
                        <span class="text-primary">Brian Nathan, Founder</span>
                    </div>
                    <p class="mb-5">
                        We are a Christian founded, non-profit making organization. We reach out to vulnerable and
                        talented children through Sports(SOKA TOTO), Creative Arts(MUDA), Mentorship, Discipleship and
                        Outreaches, Life skills, empowerment and psycho-Social Support to Young Mothers. We believe that
                        by touching the heart of a child, we have impacted the community at large. Moreover ,by
                        supporting the young mothers, their children will have wide range of opportunities when they
                        grow up because of empowerment. We therefore ensure that no child is left out/behind by exposing
                        them to various activities which suitably fits their abilities. This will enable them become
                        more disciplined, God fearing, cultivate critical thinking, problem solving and finally be
                        holistically self reliant citizens in the society.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                Our Programs
            </div>
            <h1 class="display-6 mb-5">Learn More About Our Programs</h1>
        </div>
        <!-- Programs Row 1 -->
        <div class="row g-3 justify-content-center mb-3">

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <h4 class="mb-3">Sports</h4>
                    <p class="mb-4">
                        We nurture children’s physical and mental well-being through football and other sports, focusing
                        on teamwork, discipline, and personal growth.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <h4 class="mb-3">Creative Arts</h4>
                    <p class="mb-4">
                        We offer opportunities in music, dance, elocution, and instrument learning to help children
                        express themselves creatively and explore their artistic talents.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <h4 class="mb-3">Teen Mothers Program</h4>
                    <p class="mb-4">
                        We empower teen mothers to overcome challenges such as stigma and financial instability by
                        providing financial training, vocational skills, mentorship, and psychosocial support, ensuring
                        a better future for them and their children.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <h4 class="mb-3">Outreach and Discipleship</h4>
                    <p class="mb-4">
                        Through Bible stories for younger children and Bible study for older ones, we foster spiritual
                        growth and a strong sense of moral values.
                    </p>
                </div>
            </div>
        </div>

        <!-- Programs Row 2 -->
        <div class="row g-3 justify-content-center mb-3">

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <h4 class="mb-3">Digital Literacy</h4>
                    <p class="mb-4">
                        We equip children and teen mothers with essential digital skills to bridge the technology gap
                        and prepare them for future opportunities.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <h4 class="mb-3">Mentorship and Life Skills</h4>
                    <p class="mb-4">
                        We guide children and teens to make informed life choices by offering mentorship sessions and
                        practical life skills training.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <h4 class="mb-3">Career Talks</h4>
                    <p class="mb-4">
                        We expose children to various career paths and opportunities, inspiring them to pursue their
                        dreams with confidence and clarity.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<?php
        // Include the database configuration file
        include 'admin/config.php';

        // SQL query to fetch data from the 'team_members' table
        $sql = "SELECT id, fullname, position, profile_picture FROM leaders";

        // Execute the query
        $result = $conn->query($sql);

        // Check if there are results
        if ($result->num_rows > 0) {
            // Output the team members in Bootstrap cards
            echo '<div class="container-xxl py-5">';
            echo '    <div class="container">';
            echo '        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">';
            echo '            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">';
            echo '                Our Team';
            echo '            </div>';
            echo '            <h1 class="display-6 mb-5">Meet Our Dedicated Team</h1>';
            echo '        </div>';
            echo '        <div class="row">';

            // Loop through each team member and display in a card
            while ($row = $result->fetch_assoc()) {
                echo '            <div class="col-lg-3 col-md-6 mb-4 ">';
                echo '                <div class="card shadow-sm border-0 rounded">';
                echo '                    <img src="uploads/' . htmlspecialchars($row['profile_picture']) . '" class="card-img-top" alt="Profile Picture">';
                echo '                    <div class="card-body text-center">';
                echo '                        <h5 class="card-title">' . htmlspecialchars($row['fullname']) . '</h5>';
                echo '                        <p class="card-text text-muted">' . htmlspecialchars($row['position']) . '</p>';
                echo '                    </div>';
                echo '                </div>';
                echo '            </div>';
            }

            echo '        </div>'; // End row
            echo '    </div>';
            echo '</div>';
        } else {
            // If no data is found
            echo "<p>No team members found</p>";
        }

        // Close the database connection
        $conn->close();
        ?>




<!--Include footer Section -->
<?php
include "includes/footer.php"
?>