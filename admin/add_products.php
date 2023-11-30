<style>
  .container2 {
    margin: 0 50%;
    width: 20%;
  }
</style>
<div class="container2">
  <form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Name</label>
      <input
        type="text"
        class="form-control"
        id="exampleFormControlInput1"
        placeholder="Enrter Name"
      />
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Price</label>
      <input
        type="text"
        class="form-control"
        id="exampleFormControlInput1"
        placeholder="Enrter Price"
      />
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Upload Image</label>
      <input type="file" class="form-control" id="exampleFormControlInput1" />
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Select Category</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>--- Select Category ---</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Enter Quantity</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" />
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Product Descriptions</label>
      <textarea
        class="form-control"
        id="exampleFormControlTextarea1"
        rows="3"
      ></textarea>
    </div>
    <center>
      <button
        style="margin: 20px auto; width: 100%"
        type="submit"
        name="submit"
        class="btn btn-success"
      >
        Submit
      </button>
    </center>
  </form>
</div>
