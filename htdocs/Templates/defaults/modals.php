<!-- Create Acount Modal -->

<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="review-form" method="post" action="../register">
            <div class="mb-3">
                <input class="form-control" type="text" required name="username" placeholder="Display name">
                <br>
                <input class="form-control" type="email" required name="email" placeholder="Email">
                <br>
                <input class="form-control" type="password" required name="password" placeholder="Password">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" name="register" value="register" class="btn btn-primary">Register</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Login To Acount Modal -->

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="review-form" method="post" action="/login">
            <div class="mb-3">
            <input class="form-control" type="text" required name="username" placeholder="Display name">
            <br>
            <input class="form-control" type="password" required name="password" placeholder="Password">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" name="login" value="login" class="btn btn-primary">Login</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Place Review Modal -->

<div class="modal fade" id="reviewForm" tabindex="-1" aria-labelledby="reviewFormLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="reviewFormLabel">Review Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="review-form" method="post" action="/placereview/<?= $_GET["id"]; ?>">
            <div class="mb-3">
                <input class="form-control" type="text" hidden name="type" value="review">
                <h5 style="color: black;"><?php if (isset($_SESSION['user'])) {echo "Upload review as " . $_SESSION['user']->username; } else { echo "You can not upload a review please login";} ?></h5>
                <br>
                <textarea class="form-command-input" type="text" required name="comment" style="height: 40vh;"></textarea>
                <select type="text" name="rating" required>
                    <option value="">Select A Rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="checkbox" class="form-check-input" checked="true" name="showName" id="showNameCheckBox" value="true">
                <label class="form-check-label" for="showNameCheckBox">Show My Name</label>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Post</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>