<br />
<?= $this->tag->form(['userprofile/update/', 'method' => 'post', 'class' => 'form-horizontal']) ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_profile_name" required>Name:</label>
      <div class="col-sm-10">
        <input type="hidden" name="user_profile_id" value="<?= $userprofile->user_profile_id; ?>" >
        <input type="text" class="form-control" id="user_profile_name" name="user_profile_name" value="<?= $userprofile->user_profile_name; ?>" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_profile_address" required>Address:</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="user_profile_address" name="user_profile_address"> <?= $userprofile->user_profile_address; ?></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" required>Gender:</label>
      <div class="col-sm-10">
        <select class="form-control" name="user_profile_gender">
            <option value="Man" <?php if($userprofile->user_profile_gender == 'Man'){ echo 'selected'; } ?>>Man</option>
            <option value="Woman" <?php if($userprofile->user_profile_gender == 'Woman'){ echo 'selected'; } ?>>Woman</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </form>