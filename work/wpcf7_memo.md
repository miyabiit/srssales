メッセージ（完了メッセージなど）の表示
----

* [submit "xxxx"] タグをいれないと ajax loader  が組み込まれない
* [response] で、メッセージが表示される

```
[response]
<div id="contact-form" class="table unit_form">

(途中省略)

<div class="text_c mgn_btm40">
<button type="reset" class="btn gray">キャンセル</button><button type="submit" class="btn lift"><i class="fas fa-check-circle"></i>送信する</button>[submit "送信"]
</div>
```
