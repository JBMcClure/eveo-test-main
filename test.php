		public function __construct() 
		{
			$this->blah				=	'yada';
			$this->file_search			=	'';
			$this->total_replacements	=	0;
			$this->path					=	__DIR__;	
			$this->exclusions 			=	['.DS_Store', '.git', '.gitignore', '.htaccess', 'migration.log', 'search-replace','README.md'];
			$this->dry_run				= 	false;
			$this->quiet_mode			=	false;
			$this->any					=	false;
			$this->ignore_case			=	false;
			$this->blah_blah			=	'yada, yada';
			
			$this->getOptions();
			
			$this->criteria = 	[			
									[	'pattern'	=>	'b426d5429fa57f', 				'replace'	=>	'shoutmd'					],
									[	'pattern'	=>	'shoutdistribution_id', 		'replace'	=>	'survey_id'					],
									[	'pattern'	=>	'cs_setting', 					'replace'	=>	'cs_settings'				],
									[	'pattern'	=>	'getSpecialityId', 				'replace'	=>	'getSpecialtyId'			],	
									[	'pattern'	=>	'getSpecialityName', 			'replace'	=>	'getSpecialtyName'			],										
									[	'pattern'	=>	'speciality_id', 				'replace'	=>	'specialty_id'				],	
									[	'pattern'	=>	'speciality_name', 				'replace'	=>	'specialty_name'			],
									[	'pattern'	=>	'rss_id', 						'replace'	=>	'rss_feed_id'				],
									[	'pattern'	=>	'smd_activity_viewer', 			'replace'	=>	'activity_viewers'			],
									[	'pattern'	=>	'smd_activity', 				'replace'	=>	'activities'				],
									[	'pattern'	=>	'smd_algorithm', 				'replace'	=>	'algorithms'				],
									[	'pattern'	=>	'smd_badge', 					'replace'	=>	'badges'					],
									[	'pattern'	=>	'smd_bonus_point_category',		'replace'	=>	'bonus_point_categories'	],
									[	'pattern'	=>	'smd_broadcast', 				'replace'	=>	'broadcasts'				],
									[	'pattern'	=>	'smd_carousel', 				'replace'	=>	'carousels'					],
									[	'pattern'	=>	'smd_category', 				'replace'	=>	'categories'				],
									[	'pattern'	=>	'smd_comment_like', 			'replace'	=>	'member_comment_likes'		],																		
									[	'pattern'	=>	'smd_comment_resource', 		'replace'	=>	'comment_resources'			],									
									[	'pattern'	=>	'smd_cron_logging', 			'replace'	=>	'cron_logs'					],
									[	'pattern'	=>	'smd_data_log', 				'replace'	=>	'data_logs'					],
									[	'pattern'	=>	'smd_emailsetting', 			'replace'	=>	'emailsettings'				],
									[	'pattern'	=>	'smd_event_speciality',			'replace'	=>	'event_specialties'			],									
									[	'pattern'	=>	'smd_event', 					'replace'	=>	'events'					],									
									[	'pattern'	=>	'smd_investment_range', 		'replace'	=>	'investment_ranges'			],									
									[	'pattern'	=>	'smd_mail_queue', 				'replace'	=>	'mail_queues'				],									
									[	'pattern'	=>	'smd_mail_scheduler', 			'replace'	=>	'mail_schedulers'			],									
									[	'pattern'	=>	'smd_member_address', 			'replace'	=>	'member_addresses'			],									
									[	'pattern'	=>	'smd_member_badge', 			'replace'	=>	'member_badges'				],									
									[	'pattern'	=>	'smd_member_bonus_points', 		'replace'	=>	'member_bonus_points'		],									
									[	'pattern'	=>	'smd_member_device', 			'replace'	=>	'member_devices'			],	
									[	'pattern'	=>	'smd_member_emailsetting', 		'replace'	=>	'member_emailsettings'		],									
									[	'pattern'	=>	'smd_member_follow', 			'replace'	=>	'member_followers'			],									
									[	'pattern'	=>	'smd_member_notification', 		'replace'	=>	'member_notifications'		],									
									[	'pattern'	=>	'smd_member_points_history', 	'replace'	=>	'member_point_histories'	],									
									[	'pattern'	=>	'smd_member_ranking', 			'replace'	=>	'member_rankings'			],									
									[	'pattern'	=>	'smd_member_shout', 			'replace'	=>	'member_surveys'			],	
									[	'pattern'	=>	'smd_member', 					'replace'	=>	'members'					],									
									[	'pattern'	=>	'smd_membergroup_item', 		'replace'	=>	'membergroup_items'			],									
									[	'pattern'	=>	'smd_membergroup', 				'replace'	=>	'membergroups'				],									
									[	'pattern'	=>	'smd_memberreward_membertier', 	'replace'	=>	'memberreward_membertiers'	],	
									[	'pattern'	=>	'smd_memberreward', 			'replace'	=>	'memberrewards'				],	
									[	'pattern'	=>	'smd_membertier', 				'replace'	=>	'membertiers'				],									
									[	'pattern'	=>	'smd_membertype', 				'replace'	=>	'membertypes'				],									
									[	'pattern'	=>	'smd_notification', 			'replace'	=>	'notifications'				],									
									[	'pattern'	=>	'smd_resource_category', 		'replace'	=>	'resource_categories'		],
									[	'pattern'	=>	'smd_resource_view', 			'replace'	=>	'member_resource_views'		],
									[	'pattern'	=>	'smd_resource', 				'replace'	=>	'resources'					],									
									[	'pattern'	=>	'smd_rss_category', 			'replace'	=>	'rss_feed_categories'		],	
									[	'pattern'	=>	'smd_rss', 						'replace'	=>	'rss_feeds'					],									
									[	'pattern'	=>	'smd_shout_category', 			'replace'	=>	'shout_categories'			],									
									[	'pattern'	=>	'smd_shout_comment', 			'replace'	=>	'shout_comments'			],									
									[	'pattern'	=>	'smd_shout_distribution', 		'replace'	=>	'survey_distributions'		],									
									[	'pattern'	=>	'smd_shout_favorite', 			'replace'	=>	'member_shout_favorites'	],
									[	'pattern'	=>	'smd_shout_follow', 			'replace'	=>	'shout_followers'			],									
									[	'pattern'	=>	'smd_shout_like', 				'replace'	=>	'member_shout_likes'		],
									[	'pattern'	=>	'smd_shout_poll_answer', 		'replace'	=>	'shout_poll_answers'		],									
									[	'pattern'	=>	'smd_shout_poll_member_answer',	'replace'	=>	'shout_poll_member_answers'	],	
									[	'pattern'	=>	'smd_shout_poll', 				'replace'	=>	'shout_polls'				],									
									[	'pattern'	=>	'smd_shout_resource', 			'replace'	=>	'shout_resources'			],									
									[	'pattern'	=>	'smd_shout_rss', 				'replace'	=>	'shout_rss_feeds'			],	
									[	'pattern'	=>	'smd_shout_speciality',			'replace'	=>	'shout_specialties'			],	
									[	'pattern'	=>	'smd_shout_tag', 				'replace'	=>	'shout_tags'				],									
									[	'pattern'	=>	'smd_shout_topten', 			'replace'	=>	'shout_toptens'				],									
									[	'pattern'	=>	'smd_shout_view', 				'replace'	=>	'member_shout_views'		],
									[	'pattern'	=>	'smd_shout', 					'replace'	=>	'shouts'					],										
									[	'pattern'	=>	'smd_speciality', 				'replace'	=>	'specialties'				],									
									[	'pattern'	=>	'smd_supportform_item_label', 	'replace'	=>	'supportform_item_labels'	],									
									[	'pattern'	=>	'smd_supportform_item', 		'replace'	=>	'supportform_items'			],									
									[	'pattern'	=>	'smd_supportform_member', 		'replace'	=>	'supportform_members'		],	
									[	'pattern'	=>	'smd_supportform', 				'replace'	=>	'supportforms'				],									
									[	'pattern'	=>	'smd_tag', 						'replace'	=>	'tags'						],									
									[	'pattern'	=>	'smd_tracking_log', 			'replace'	=>	'tracking_logs'				],	
								];
			
			$this->setPregMatchArrays();			
			$this->getFileList();
			$this->replaceContents();
		}

