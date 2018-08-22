# Laravel 5.5 測試原始碼

## 測試項目
>1. Laravel 5.5 的使用方式
>2. REST APIs


## <a name='git-archive'></a>Git Archive 指令
>1. 匯出更新包指令(差異)

	git archive --format zip --output /D/目的檔案路徑 目前版本tag \ 
	$( git diff-tree -r --no-commit-id --name-only --diff-filter=ACMRT 上一版tag 目前版本tag )

	範例
	git archive --format zip --output /D/phew1606_patch_v0.7.3.zip v0.7.3 \ 
	$( git diff-tree -r --no-commit-id --name-only --diff-filter=ACMRT v0.7.1 v0.7.3 )

>2. 匯出更新包指令（完整）

	git archive --format zip --output /D/目的檔案路徑 目前版本tag
	
	範例
	git archive --format zip --output /D/phew1606_package_v0.1.0.0.zip v0.1.0.0



[md_ref_1]: http://markdown.tw/#philosophy
[md_ref_2]: https://chrome.google.com/webstore/detail/markview/iaddkimmopgchbbnmfmdcophmlnghkim
[md_ref_3]: https://stackedit.io/editor

