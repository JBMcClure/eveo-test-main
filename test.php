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
									[	'pattern'	=>	'shoutmd', 				'replace'	=>	'shoutmd'					],
									[	'pattern'	=>	'survey_id', 		'replace'	=>	'survey_id'					],
									[	'pattern'	=>	'cs_settings', 					'replace'	=>	'cs_settings'				],
									[	'pattern'	=>	'getSpecialtyId', 				'replace'	=>	'getSpecialtyId'			],	
									[	'pattern'	=>	'getSpecialtyName', 			'replace'	=>	'getSpecialtyName'			],										
									[	'pattern'	=>	'specialty_id', 				'replace'	=>	'specialty_id'				],	
									[	'pattern'	=>	'specialty_name', 				'replace'	=>	'specialty_name'			],
									[	'pattern'	=>	'rss_feed_id', 						'replace'	=>	'rss_feed_id'				],
									[	'pattern'	=>	'activity_viewers', 			'replace'	=>	'activity_viewers'			],
									[	'pattern'	=>	'activities', 				'replace'	=>	'activities'				],
									[	'pattern'	=>	'algorithms', 				'replace'	=>	'algorithms'				],
									[	'pattern'	=>	'badges', 					'replace'	=>	'badges'					],
									[	'pattern'	=>	'bonus_point_categories',		'replace'	=>	'bonus_point_categories'	],
									[	'pattern'	=>	'broadcasts', 				'replace'	=>	'broadcasts'				],
									[	'pattern'	=>	'carousels', 				'replace'	=>	'carousels'					],
									[	'pattern'	=>	'categories', 				'replace'	=>	'categories'				],
									[	'pattern'	=>	'member_comment_likes', 			'replace'	=>	'member_comment_likes'		],																		
									[	'pattern'	=>	'comment_resources', 		'replace'	=>	'comment_resources'			],									
									[	'pattern'	=>	'cron_logs', 			'replace'	=>	'cron_logs'					],
									[	'pattern'	=>	'data_logs', 				'replace'	=>	'data_logs'					],
									[	'pattern'	=>	'emailsettings', 			'replace'	=>	'emailsettings'				],
									[	'pattern'	=>	'event_specialties',			'replace'	=>	'event_specialties'			],									
									[	'pattern'	=>	'events', 					'replace'	=>	'events'					],									
									[	'pattern'	=>	'investment_ranges', 		'replace'	=>	'investment_ranges'			],									
									[	'pattern'	=>	'mail_queues', 				'replace'	=>	'mail_queues'				],									
									[	'pattern'	=>	'mail_schedulers', 			'replace'	=>	'mail_schedulers'			],									
									[	'pattern'	=>	'member_addresses', 			'replace'	=>	'member_addresses'			],									
									[	'pattern'	=>	'member_badges', 			'replace'	=>	'member_badges'				],									
									[	'pattern'	=>	'member_bonus_points', 		'replace'	=>	'member_bonus_points'		],									
									[	'pattern'	=>	'member_devices', 			'replace'	=>	'member_devices'			],	
									[	'pattern'	=>	'member_emailsettings', 		'replace'	=>	'member_emailsettings'		],									
									[	'pattern'	=>	'member_followers', 			'replace'	=>	'member_followers'			],									
									[	'pattern'	=>	'member_notifications', 		'replace'	=>	'member_notifications'		],									
									[	'pattern'	=>	'member_point_histories', 	'replace'	=>	'member_point_histories'	],									
									[	'pattern'	=>	'member_rankings', 			'replace'	=>	'member_rankings'			],									
									[	'pattern'	=>	'member_surveys', 			'replace'	=>	'member_surveys'			],	
									[	'pattern'	=>	'members', 					'replace'	=>	'members'					],									
									[	'pattern'	=>	'membergroup_items', 		'replace'	=>	'membergroup_items'			],									
									[	'pattern'	=>	'membergroups', 				'replace'	=>	'membergroups'				],									
									[	'pattern'	=>	'memberreward_membertiers', 	'replace'	=>	'memberreward_membertiers'	],	
									[	'pattern'	=>	'memberrewards', 			'replace'	=>	'memberrewards'				],	
									[	'pattern'	=>	'membertiers', 				'replace'	=>	'membertiers'				],									
									[	'pattern'	=>	'membertypes', 				'replace'	=>	'membertypes'				],									
									[	'pattern'	=>	'notifications', 			'replace'	=>	'notifications'				],									
									[	'pattern'	=>	'resource_categories', 		'replace'	=>	'resource_categories'		],
									[	'pattern'	=>	'member_resource_views', 			'replace'	=>	'member_resource_views'		],
									[	'pattern'	=>	'resources', 				'replace'	=>	'resources'					],									
									[	'pattern'	=>	'rss_feed_categories', 			'replace'	=>	'rss_feed_categories'		],	
									[	'pattern'	=>	'rss_feeds', 						'replace'	=>	'rss_feeds'					],									
									[	'pattern'	=>	'shout_categories', 			'replace'	=>	'shout_categories'			],									
									[	'pattern'	=>	'shout_comments', 			'replace'	=>	'shout_comments'			],									
									[	'pattern'	=>	'survey_distributions', 		'replace'	=>	'survey_distributions'		],									
									[	'pattern'	=>	'member_shout_favorites', 			'replace'	=>	'member_shout_favorites'	],
									[	'pattern'	=>	'shout_followers', 			'replace'	=>	'shout_followers'			],									
									[	'pattern'	=>	'member_shout_likes', 				'replace'	=>	'member_shout_likes'		],
									[	'pattern'	=>	'shout_poll_answers', 		'replace'	=>	'shout_poll_answers'		],									
									[	'pattern'	=>	'shout_poll_member_answers',	'replace'	=>	'shout_poll_member_answers'	],	
									[	'pattern'	=>	'shout_polls', 				'replace'	=>	'shout_polls'				],									
									[	'pattern'	=>	'shout_resources', 			'replace'	=>	'shout_resources'			],									
									[	'pattern'	=>	'shout_rss_feeds', 				'replace'	=>	'shout_rss_feeds'			],	
									[	'pattern'	=>	'shout_specialties',			'replace'	=>	'shout_specialties'			],	
									[	'pattern'	=>	'shout_tags', 				'replace'	=>	'shout_tags'				],									
									[	'pattern'	=>	'shout_toptens', 			'replace'	=>	'shout_toptens'				],									
									[	'pattern'	=>	'member_shout_views', 				'replace'	=>	'member_shout_views'		],

									[	'pattern'	=>	'shouts', 					'replace'	=>	'shouts'					],										
									[	'pattern'	=>	'specialties', 				'replace'	=>	'specialties'				],									
									[	'pattern'	=>	'supportform_item_labels', 	'replace'	=>	'supportform_item_labels'	],									
									[	'pattern'	=>	'supportform_items', 		'replace'	=>	'supportform_items'			],									
									[	'pattern'	=>	'supportform_members', 		'replace'	=>	'supportform_members'		],	
									[	'pattern'	=>	'supportforms', 				'replace'	=>	'supportforms'				],									
									[	'pattern'	=>	'tags', 						'replace'	=>	'tags'						],									
									[	'pattern'	=>	'tracking_logs', 			'replace'	=>	'tracking_logs'				],	
								];
			
			$this->setPregMatchArrays();			
			$this->i_like	= 'it!';
			$this->getFileList();
			$this->replaceContents();
		}

			$this->stuff = 'is better';

