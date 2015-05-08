echo json_encode(array(
					'users' => array(
						'user' => array(
							'reg_info' => array(
								'user_first' => $user_data['user_first'],
								'user_last' => $user_data['user_last'],
								'user_email' => $user_data['user_email']
							),
							'sys_info' => array(
								'user_token' => $user_data['user_token'],
								'user_status' => $user_data['user_status'],
								'user_type' => $user_data['user_type'],
								'user_reg_ip' => $user_data['user_reg_ip'],
								'user_last_login' => $user_data['user_last_login'],
								'user_log_ip' => $user_data['user_log_ip'],
								'user_timestamp' => $user_data['user_timestamp'],
							)
						)
					)
				));
