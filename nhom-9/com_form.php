
			<div class="col-sm-4">
				<div class="comment-form">Comment</div>

				<!-- Comment box -->
				<div class="comment-form">
				    <!-- Comment Avatar -->
				    <div class="comment-avatar">
				        <img src="http://gravatar.com/avatar/412c0b0ec99008245d902e6ed0b264ee?s=80">
				    </div>

				    <form class="form" name="form" method="POST" action="comment.php">
				        <div class="form-row">
				        	<textarea class="input" name="comment_message" placeholder="Add comment..." required></textarea>
				        	<!-- <input class="input" name="comment_message" placeholder="Add comment..." type="text" height="5" width="5"> -->
				        </div>
						
						<div class="form-row">
				        	<input class="input" name="comment_email" placeholder="Email" type="email">
				        </div>

				        <div class="form-row text-right">
					        <input id="comment-anonymous" name="comment_anonymous" type="checkbox">
					        <label for="comment-anonymous">Anonymous</label>
				        </div>

				        <div class="form-row">
				        	<input type="submit" name="sub_comment" value="Add Comment">

				        </div>
				    </form>
				</div>


  			<!-- Comments List -->
				<div class="comments" id="comment_list">

			<?php
				$conn = mysqli_connect("localhost","root","","vidu") or die ('Could not connect!');

				$sql = "SELECT * FROM cmt";
		    	$result = mysqli_query($conn, $sql);
		    	
				while($row = mysqli_fetch_row($result)) {
			 ?>

				<?php if($row[2] == null) { ?>
					<div class="comment">
					      <!-- Comment Avatar -->
						      <div class="comment-avatar">
						        <img src="img1.png">
						      </div>

					      <!-- Comment Box -->
					        <div class="comment-box">
					        	<div class="comment-text"> <?php echo $row[1]; ?> </div>
					        	<div class="comment-footer">
					            	<div class="comment-info">
					            		<span class="comment-author">
					                		 <?php echo "Anonymous"; ?> 
					            		</span>
					            		<span class="comment-date"><?php echo substr($row[3], 0, 10); ?></span>
					          		</div>

					          		<div class="comment-actions">
					            		<a href="#">Reply</a>
					          		</div>
					        	</div>
					        </div>
					    </div>
				<?php } else { ?>
					<div class="comment" >
					      <!-- Comment Avatar -->
						      <div class="comment-avatar">
						        <img src="http://lorempixel.com/200/200/people">
						      </div>

					      <!-- Comment Box -->
					        <div class="comment-box">
					        	<div class="comment-text"> <?php echo $row[1]; ?> </div>
					        	<div class="comment-footer">
					            	<div class="comment-info">
					            		<span class="comment-author">
					                		<a href="mailto:<?php echo $row[2] ?>"> <?php echo $row[2]; ?> </a>
					            		</span>
					            		<span class="comment-date"><?php echo substr($row[3], 0, 10); ?></span>
					          		</div>

					          		<div class="comment-actions">
					            		<a href="#">Reply</a>
					          		</div>
					        	</div>
					        </div>
					    </div>
				<?php } ?>
			<?php } ?> 
					</div>
				</div>
	