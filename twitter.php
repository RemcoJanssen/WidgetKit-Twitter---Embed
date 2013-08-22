        if ($limit > 15) {
          $params["count"] = $limit;
        } else {
			$params["count"] = $limit;
		}
                // To get EMBED code
				foreach($request as $key=>$value):
				
				$twid = $value[id];
				$params2 = array();
				$params2['id'] = $twid;
				$request2    = $connection->get('statuses/oembed', $params2);
				$request[$key]['html'] = $request2[html];
				endforeach;
						$tweet->html = $res['html'];
						$tweet->html = $res['html'];
