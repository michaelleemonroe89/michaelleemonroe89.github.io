<?php
// Udacity Projects Section Page
$projects = [
    'advanced_data_wrangling_and_data_modeling' => [
        'Data Modeling with Postgres' => 'data_modeling_with_postgres',
        'Real World Data Wrangling with Python' => 'real_world_data_wrangling_with_python',
    ],
    'data_analysis_and_descriptive_statistics' => [
        'Analyze A/B Test Results' => 'Analyze_A_B_Test_Results',
        'Investigate a Dataset' => 'investigate_a_dataset',
    ],
    'r_programming' => [
        'Explore Bikeshare Data with R' => 'explore_bikeshare_data_with_r',
    ],
    'supervised_and_unsupervised_learning' => [
        'Find Donors for CharityML' => 'find_donors_for_charityml',
        'Identify Customer Segments' => 'identify_customer_segments',
    ],
];
function make_link($folder, $subfolder, $file) {
    return "udacity_projects/$folder/$subfolder/$file";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udacity Projects | Michael Monroe</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        <h1><a href="/index.php">Michael Monroe</a></h1>
        <p><a href="/index.php">Home</a> &gt; Udacity Projects</p>
    </header>
    <main>
        <h2>Udacity Projects</h2>
        <?php foreach ($projects as $folder => $subprojects): ?>
            <section>
                <h3><?= ucwords(str_replace('_', ' ', $folder)) ?></h3>
                <ul>
                <?php foreach ($subprojects as $title => $subfolder): ?>
                    <li>
                        <?= $title ?>
                        <ul>
                        <?php
                        $dir = __DIR__ . "/udacity_projects/$folder/$subfolder";
                        if (is_dir($dir)) {
                            $files = scandir($dir);
                            foreach ($files as $file) {
                                if (preg_match('/\.html$/', $file)) {
                                    echo '<li><a href="' . make_link($folder, $subfolder, $file) . '">' . $file . '</a></li>';
                                }
                            }
                        }
                        ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
                </ul>
            </section>
        <?php endforeach; ?>
    </main>
    <footer>
        <p>&copy; 2025 Michael Monroe</p>
    </footer>
</body>
</html>
