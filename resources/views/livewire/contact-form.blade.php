<div>
    <form wire:submit.prevent="submit">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" wire:model="name" class="form-control" placeholder="Enter your name*">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <input type="tel" wire:model="phone" class="form-control" placeholder="Enter your phone">
                    @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" wire:model="city" class="form-control" placeholder="Enter your City">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" wire:model="state" class="form-control" placeholder="Enter your State">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="number" wire:model="loan_amount" class="form-control" placeholder="Enter Loan Amount">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" wire:model="business_type" class="form-control"
                        placeholder="Type of business">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <select wire:model="loan_category" class="form-control">
                        <option value="">Select Loan Category</option>
                        <option value="personal">Personal Loan</option>
                        <option value="business">Business Loan</option>
                        <option value="home">Home Loan</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <select wire:model="collateral" class="form-control">
                        <option value="">Select Collateral Mortgage</option>
                        <option value="property">Property</option>
                        <option value="gold">Gold</option>
                        <option value="none">None</option>
                    </select>
                </div>
            </div>

            <div class="form-check mt-3">
                <input type="checkbox" wire:model="terms" class="form-check-input" id="terms">
                <label for="terms" class="form-check-label">
                    I hereby authorize to send notifications on SMS/ RCS Messages/ Promotional/ Informational messages.
                </label>
                @error('terms')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3">Send Message</button>

            @if (session()->has('success'))
                <div class="alert alert-success mt-3">{{ session('success') }}</div>
            @endif
        </div>
    </form>
</div>
