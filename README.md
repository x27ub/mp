INSTRUCTIONS

-content-
1) directory mp/
2) database mp.sql.gz


i) unzip mp.sql.gz
ii) read mp.sql into a mysql server
iii) get a TYPO3 source typo3_src-4.5.xx.tar.gz from typo3.org and unpack it on the same level as directory mp/ 
iv) adjust the symlink in mp/typo3_src to point to ../typo3_src-4.5.xx
v) adjust mp/typo3conf/localconf.php to your mysql server parameters, i.e. the typo_db**

