<?php
	if (!defined('ED_MODULE')) die ();

	/**
	 *
	 * Input variables:
	 *      $eventsList
	 *      $catsList
	 *
	 */
?>
<html>
<head>
	<title>EventDiary - Admin</title>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>
	<div class="wrapper" style="width: <?= Config::WRAPPER_WIDTH; ?>">
		<form action="" method="post">
			<div class="form-block-5">
				<input name="ed_title" id="ed_title" type="text" value="" placeholder="Write down event title">
				Category:
				<select name="cats_list" id="cats_list">
					<?php
						if (count ($catsList) == 0)
							$catsList = array (
								array (
									'id'    => 0,
									'title'  => 'No categories'
								)
							);
						foreach ($catsList as $item) : ?>
							<option value="<?= $item ['id'] ?>"><?= $item ['title'] ?></option>
						<?php
						endforeach; ?>
				</select>
			</div><div class="form-block-5">
				<textarea name="ed_text" id="ed_text" placeholder="Write down description"></textarea>
			</div><div class="form-block-5">
				<input name="ed_date" id="ed_date" type="text" value="<?= date ('Y-m-d');?>" placeholder="0000-00-00">
				<button type="submit" name="createSubmitBtn" id="createSubmitBtn">Create record</button>
			</div><div class="form-block-5">

			</div><div class="form-block-5">

			</div>
		</form>
		<div>
			Display records:
				<?php
					$countsArray = array (15,40,60,100,200,500,1000);
					foreach ($countsArray as $item) :
						if (getCookie($viewed_events_count) == $item) :?>
							<strong><?= $item ?></strong><?php
						else : ?>
							<a href="?viewed_events_count=<?= $item ?>"><?= $item ?></a>

					<?php
						endif;
					endforeach; ?>

			<div class="list">
				<?php
					if (count ($eventsList) == 0)
						echo 'No records';
					else
					foreach ($eventsList as $item) :
						?><div class="item">
							<div class="item-title"><span class="item-id">#<?= $item ['id'] ?></span> <?= $item ['title'] ?></div>
							<div class="item-text"><?= $item ['text'] ?></div>
							<div class="item-footer">Date: <span class="item-date"><?= $item ['date'] ?></span>, Category: <span class="item-category"><?= $item ['cat'] ?></span></div>
						</div><?php
					endforeach; ?>
			</div>
		</div>
	</div>
</body>
</html>