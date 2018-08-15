  grep 'href=""' ./*.* > work/link-error-1.txt
  grep 'href="/srs/' ./*.* | grep -v "html" > work/link-error-2.txt 
  grep -E "href=\"[^(/|#)]*\"" ./*.*  | grep -v 'href=""' > work/link-error-3.txt
  grep _un-contact ./*.* > work/link-error-4.txt
  grep _un-contact ./*.* >> work/link-error-4.txt
  grep _bt-contact ./*.* >> work/link-error-4.txt
  grep _pm-contact ./*.* >> work/link-error-4.txt
  grep 'href="/contact"' ./*.* >> work/link-error-4.txt
  grep -E "href=\"[un|bt|pm]" ./*.* > work/link-error-5.txt
