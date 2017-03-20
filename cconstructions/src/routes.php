<?php
// Routes

$app->get('/testsqlconnection', function($request,$response) {
	
	if (isset($this->db)) {
		$this->logger->info("Database Connection Found .. ");
		
	}
	$testDatabase = new TestDatabaseConnection($this->db);
	
	$data = $testDatabase->testSqlConnection();
	if (isset($data)) {
		$this->logger->info("Data Retrived .. ");
	}
	$result = [];
	foreach ($data as $key) {
		$result["value"] = $key->getValue();
	}
	if ($result["value"] == "1") {
		$this->logger->addInfo("Database Connection Established .. ");
	}
	
   	return $response->withJson($result,200);
});
$app->get('/projects', function ($request, $response, $args) {
    
    $this->logger->info("Slim-Skeleton '/' route");

    
    return $response->withJson($result,200);
});
$app->get('/careers', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
$app->get('/testimonials', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});


/*
	Contacting Person Section
 */

$app->post('/contactus', function ($request, $response, $args) {
    $contactDetails = $request->getParsedBody();
    $this->logger->info("Request Recieved for Contacting Person");

    
    return $response->withJson($result,200);
});


$app->get('/test/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});



