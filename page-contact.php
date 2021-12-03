<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>

<section>
  <div class="title">
    <h1>お問い合わせ</h1>
    <p>Contact</p>
  </div>

  <div class="title2">
    <h2 class="contact_title">
      フォームからのお問い合わせ
    </h2>
    <p>
      記入内容の確認後、2~3営業日以内にご連絡させていただきます。
    </p>
  </div>
  <div class="contactform">
    <form action="">
      <?php echo do_shortcode('[contact-form-7 id="19" title="お問い合わせフォーム"]'); ?>
      <!-- <table>
        <tr>
          <th>名前</th>
          <td><input type="text" name="name" id="name" class="text"></td>
        </tr>
        <tr>
          <th>フリガナ</th>
          <td><input type="text" name="fuligana" id="fuligana" class="text"></td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td><input type="email" name="email" id="email" class="text"></td>
        </tr>
        <tr>
          <th>郵便番号</th>
          <td><input type="text" name="postcode" id="postcode" class="text"></td>
        </tr>
        <tr>
          <th>住所</th>
          <td><input type="text" name="address" id="address" class="text"></td>
        </tr>
        <tr>
          <th>問い合わせ内容</th>
          <td><label for="">
            <input type="radio" name="inquiry">中途採用に関して
            <input type="radio" name="inquiry">新卒採用に関して
            <input type="radio" name="inquiry">その他のお問い合わせ
          </label>

          </td>

        </tr>
        <tr>
          <th></th>
          <td>
            <textarea id="textarea"></textarea>
          </td>
        </tr>
      </table> -->
    </form>
  </div>
</section>
<?php get_footer(); ?>