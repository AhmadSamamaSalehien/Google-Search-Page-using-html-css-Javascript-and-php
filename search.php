<?php

    ob_start();
    header('Content-Type: application/json');

    error_reporting(E_ERROR);
    ini_set('display_errors', 0);

    $apiKey = 'AIzaSyBTCZBDrgxOYstLSrXisxm23RqfDXPp0Q0';
    $cseId = '66c11f09da19446ce';

    $query = isset($_GET['q']) ? trim($_GET['q']) : '';

    if (empty($query))
        
        {

            http_response_code(400);
            echo json_encode(['error' => 'No query provided']);
            ob_end_flush();
            exit;
    
        }

    $apiUrl = "https://www.googleapis.com/customsearch/v1?key={$apiKey}&cx={$cseId}&q=" . urlencode($query);

    try
    
        {

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $apiUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($ch, CURLOPT_FAILONERROR, true);
            curl_setopt($ch, CURLOPT_HEADER, false);

            $response = curl_exec($ch);

            if ($response === false)
                
                {

                    throw new Exception('cURL error: ' . curl_error($ch));
            
                }

            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            $data = json_decode($response, true);

            if (json_last_error() !== JSON_ERROR_NONE)
                
                {

                    throw new Exception('JSON decode error: ' . json_last_error_msg() . ' in response');
            
                }

            if ($httpCode >= 400 || isset($data['error']))
                
                {

                    $errorMessage = isset($data['error']['message']) ? $data['error']['message'] : 'Unknown API error';
                    throw new Exception("API error (HTTP $httpCode): $errorMessage");
            
                }

            echo $response;
    
        } 
        
        catch (Exception $e)
        
            {

                http_response_code(500);
                echo json_encode(['error' => $e->getMessage()]);
    
            }

    ob_end_flush();
?>