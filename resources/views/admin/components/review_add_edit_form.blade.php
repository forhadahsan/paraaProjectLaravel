<div class="modal" id="reviewAddEditModal" tabindex="-1"  role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Review</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <form action="{{ route('admin.review.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col mb-3">
              <label class="form-label">Name</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" required />
            </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <label class="form-label">Email</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" />
            </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <label class="form-label">Review</label>
              <textarea name="review" rows="5" id="review" class="form-control" placeholder="Enter your review"></textarea>
            </div>
          </div>
          <div class="row g-2">
            <div class="col mb-0">
              <label class="form-label">Platform</label>
              <select name="platform" id="platform" class="form-control" required>
                <option value="">Select Platform</option>
                <option value="web">Web</option>
                <option value="google">Google</option>
                <option value="facebook">Facebook</option>
                <option value="socila">Social</option>
                <option value="yelp">Yelp</option>
              </select>
            </div>
            <div class="col mb-0">
              <label class="form-label">Status</label>
              <select name="status" id="status" class="form-control" required>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select>
            </div>
            <div class="row g-2">
              <div class="col mb-3">
                <label class="form-label">Rating</label>
                <input type="number" id="rating" name="rating" class="form-control" maxlength="1" max="5" placeholder="Enter Rating" required />
              </div>
            </div>
          </div>
        </div>
        <input type="hidden" id="reviewId" name="reviewId">
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
          </button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>