SELECT lang.language,tutor_lang.language_id from rl_language_tbl lang inner join rl_tutor_language_tbl tutor_lang on lang.lid=tutor_lang.language_id where tutor_lang.user_id=1
