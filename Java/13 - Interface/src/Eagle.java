public class Eagle extends Bird implements Fly {

    private boolean flying;
    private int altitude;

    public Eagle(String name) {
        super(name);
        this.flying = false;
        this.altitude = 0;
    }

    public int getAltitude() {
        return altitude;
    }

    public boolean isFlying() {
        return flying;
    }

    @Override
    public String sing() {
        return "Screech!";
    }

    @Override
    public void takeOff() {
        if (!this.flying && this.altitude == 0) {
            this.flying = true;
            System.out.println("Eye Cherry takes off in the sky");
        }
    }

    @Override
    public void ascend(int meters) {
        if (this.flying) {
            this.altitude = this.altitude + meters;
            System.out.println("Eye Cherry flies upward, altitude : " + this.altitude);
        }
    }

    @Override
    public void descend(int meters) {
        if (this.flying) {
            this.altitude = this.altitude - meters;
            System.out.println("Eye Cherry flies downward, altitude : " + this.altitude);
        }
    }

    @Override
    public void glide() {
        if (this.altitude > 0) {
            System.out.println("It glides into the air");
        }
    }

    @Override
    public void land() {
        if (this.altitude > 1) {
            System.out.println("Eye Cherry is too high, it can't lands.");
        } else {
            System.out.println("Eye Cherry lands on the ground.");
        }
    }
}
